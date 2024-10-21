<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('posts.index', ['allPosts' => $posts]);
        //return "<h1>All posts</h1>";
    }

    public function show($id){

       // \Log::debug($id);
       $post = Post::find($id);
       return view('posts.show', ['post' => $post]);
    }

    public function create(){
        return view('posts.create');

    }

    public function store(Request $requst){
        \Log::debug($requst);
        $data = [
            "title" => $requst -> title,
            'content' => $requst ->content
        ];

        Post::create($data);

        // return view('posts.index');
        return redirect('/posts/');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $requst, $id){
        $post = Post::find($id);
        $data = [
            "title" => $requst -> title,
            'content' => $requst ->content
        ];

        $post->update($data);

        // return view('posts.index');
        return redirect('/posts/');
    }
}
