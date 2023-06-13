<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    //
    public function Index(){
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function edit($id){
        $category = Categories::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function add(){
        return view('admin.categories.add');
    }

    public function store(Request $request){
        $category = new Categories();
        $category->name = $request->category_name;
        $category->save();
        return redirect()->route('admin.categories');
    }

    public function update(Request $request, $id){
        $category = Categories::find($id);
        $category->name = $request->category_name;
        $category->save();
        return redirect()->route('admin.categories');
    }

    public function delete($id){
        $category = Categories::find($id);
        $category->delete();
        return back()->with(['message' => 'category deleted successfully!']);
    }
}
