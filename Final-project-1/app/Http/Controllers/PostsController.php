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


    public function edit(Post $post)
    {
       if ($post->user_id != auth()->user()->id){
            $this->authorize('update', $post->user_id);
       }
        
        return view ('posts.edit' , compact('post'));
    }

    public function update(Post $post) 
    {
    
       $data = request()->validate([

        'caption' => 'required' ,
        'image' =>'',
       ]
       );
        if ( request('image')) {
        
           $imagePath = request('image')->store('uploads' , 'public');           
        }
        $post-> update(array_merge (
            $data,
           [ 'image' => $imagePath]
        
        ));
    
       return redirect ('/myprofile/'. auth()->user()->id);
    }
    public function destroy(Post $post)
    {
  
         
          $post->delete($post);
         return redirect('/myprofile/' . auth()->user()->id);
  }
}
