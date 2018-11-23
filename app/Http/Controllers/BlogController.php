<?php

namespace App\Http\Controllers;

use App\Blog_model;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog_model::all();

        return view('home', compact('blogs'));
    }

    public function edit(Request $request)
    {
        $blog = new Blog_model();
        $blog->title = $request->title;
        $blog->teaser = $request->teaser;
        $blog->content = $request->input('content');
        $blog->describe = $request->describe;
        $blog->save();

        return redirect(route('home'));
    }

    public function update(Request $request, $id)
    {


        $blog = Blog_model::find($id);
        $blog->title = $request->title;
        $blog->teaser = $request->teaser;
        $blog->content = $request->input('content');
        $blog->describe = $request->describe;
        $blog->save();

        return redirect(route('home'));
    }

    public function delete($id)
    {
        $blog = Blog_model::where('id', $id)->delete();

        return redirect(route('home'));

    }

    public function showedit()
    {
        return view('edit');
    }

    public function showupdate($id)
    {
        return view('update', compact('id'));
    }
}
