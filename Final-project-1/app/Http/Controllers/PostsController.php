<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Spatie\Searchable\Search;
class PostsController extends Controller
{
    public function __construct()
    {
            $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show']]);
            $this->middleware('permission:post-create', ['only' => ['create','store']]);
            $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
            $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $posts = Post::with('caption')->get();
            return view('posts.show', compact('posts'));
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
        return redirect('/myprofile/' . auth()->user()->id)
                       ->with('success','Product created successfully.');
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
    
       return redirect ('/myprofile/'. auth()->user()->id)
                       ->with('success','Product updated successfully');
    }
    public function destroy(Post $post)
    {
  
         
          $post->delete($post);
         return redirect('/myprofile/' . auth()->user()->id)
                        ->with('success','Product deleted successfully');
  }

public function search(Request $request)
{
    $searchResults = (new Search())
        ->registerModel(Post::class, 'caption')
        
        ->perform($request->input('query'));

    return view('search', compact('searchResults'));
}
}
