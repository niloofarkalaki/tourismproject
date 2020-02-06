<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class PostsController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    
    // public function show($user)
    // {
    //      $user = User::findOrFail($user);
    //       return view('posts.mypost' , ['user' => $user] );
    //     //   $post = Post::findOrFail($post);
    //     //   return view('posts.show', compact('post'));
          
    // }
          public function show( \App\Post $post)
          {
          return view('posts.show', compact('post'));
          }
    

    public function create()
    {
        return view ('posts.create');
    }
    

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => [ 'required' , 'image'],
        ]);


        $imagePath = request('image')->store('uploads' , 'public');
        auth()->user()->posts()->create([
            'caption' =>$data['caption'],
            'image' => $imagePath,
        ]);
        return redirect('/myprofile/' . auth()->user()->id);
    }

    
}
