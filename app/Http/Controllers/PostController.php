<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Support\Facades\File;
use App\Models\Categories;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();
        $categories = Categories::all();
        $featured_posts = Post::where('is_featured', 1)->get();
        return view('index', compact('posts', 'categories', 'featured_posts'));
    }

    public function dashboard(){
        $num_of_posts = count(Post::all());
        $num_of_comments = count(Comment::all());
        $num_of_replies = count(Reply::all());
        $num_of_categories = count(Categories::all());

        $where = "where created_at < NOW() - INTERVAL 1 WEEK";
        $query = "SELECT
            (SELECT count(id) from posts $where) as total_posts_week_ago,
            (SELECT count(id) from categories $where) as total_categories_week_ago,
            (SELECT count(id) from comments $where) as total_comments_week_ago,
            (SELECT count(id) from replies $where) as total_replies_week_ago
        ";
        $totals_weeks_ago = DB::select( $query );
        // dd($total_weeks_ago);

        return view('dashboard', compact('num_of_posts', 'num_of_comments', 'num_of_replies', 'num_of_categories', 'totals_weeks_ago'));
    }

    public function show($id){
        $post = Post::find($id);
        $categories = Categories::all();

        return view('post-details', compact('post', 'categories'));
    }

    public function showByCategory($categories_id){
        $posts = Post::where('categories_id', $categories_id)->get();
        $categories = Categories::all();
        $featured_posts = Post::where('is_featured', 1)->get();
        return view('index', compact('posts', 'categories', 'featured_posts'));
    }

    public function add()
    {
        $categories = Categories::all();
        return view('admin.posts.add', compact('categories'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Categories::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post_image = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $post_image = $image->getClientOriginalName();
        }

        $post = Post::find($id);
        $post->post_title = $request->post_title;
        $post->categories_id = $request->cat_id;
        if(!empty($post_image)) $post->image = $post_image;
        $post->content = $request->post_content;
        $post->save();

        $this->uploadImage($request, $post->id);
        return redirect()->route('admin.posts');
    }

    public function store(Request $request)
    {
        $post_image = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $post_image = $image->getClientOriginalName();
        }

        $post = new Post();
        $post->post_title = $request->post_title;
        $post->categories_id = $request->cat_id;
        $post->content = $request->post_content;
        $post->image = $post_image;
        $post->save();

        $this->uploadImage($request, $post->id);
        return redirect()->route('admin.posts');
    }

    public  function uploadImage(Request $request, $post_id){
        if($request->hasFile('image')){
            $path = public_path("post_images/post_$post_id");
            if(!file_exists($path)){
                mkdir($path, 0777, true);
            }
            $image = $request->file('image');
            $post_image = $image->getClientOriginalName();
            $image->move($path, $post_image);
        }
    }

    public function adminIndex(){
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return back()->with(['message' => 'Post deleted successfully!']);
    }

    public function markAsFeatured($post_id){
        $post = Post::find($post_id);
        $post->is_featured = 1;
        $post->save();
        return back()->with(['message' => 'Post marked as featured!']);
    }
    public function markAsUnfeatured($post_id){
        $post = Post::find($post_id);
        $post->is_featured = 0;
        $post->save();
        return back()->with(['message' => 'Post marked as unfeatured!']);
    }

}
