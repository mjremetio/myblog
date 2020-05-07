<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);
        // $post = new \App\Post();
        // $post->caption = $data['caption'];     
        // $post->save();
        //$imagePath = request('image')->store('uploads','public');
        auth()->user()->posts()->create($data);

    
         dd(request()->all());
    }
}
