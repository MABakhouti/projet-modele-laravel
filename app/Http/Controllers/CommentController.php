<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request){
        $comment = new Comment();
        $comment->visitor_name = $request->visitor_name;
        $comment->visitor_email = $request->visitor_email;
        $comment->visitor_website = $request->visitor_website;
        $comment->post_id = $request->post_id;
        $comment->body = $request->body;
        $comment->save();

        return back()->with(['message'=>'Comment Added Successfully!']);
    }
}
