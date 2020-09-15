<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
class PostsController extends Controller
{
    //
    public function show($id)
    {
        $myPost = posts::findorFail($id);
        return view('posts',compact('myPost'));
    }
    public function store(Request $request)
    {
        $myPost = new posts;
        $myPost->title = $request->PostTitle;
        $myPost->desc = $request->PostDesc;
        $myPost->save();
        return view('posts');
    }
    public function index()
    {
        return view('posts');
    }
}
