<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at')->paginate(5);

        return view('post/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([

            'title' => 'required|min:4',
            'body' => 'required',
            'image_name' => 'image|nullable|max:1999'
        ]);

        $attributes['user_id'] = auth()->id();

        //Handle file upload

        if ($request->hasFile('image_name'))
        {
            //Get filename with extension
           $fileNameWithExt = $request->file('image_name')->getClientOriginalName();

            //get only file name without extention
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get only extention
            $extention = $request->file('image_name')->getClientOriginalExtension();

            //generate name for storage
            $fileNameToStore = $fileName.'_'.time().'.'.$extention;

            //
            $path = $request->file('image_name')->storeAs('public/images/'.auth()->user()->name, $fileNameToStore);

            //add filename to attributes
            $attributes['image_name'] = $fileNameToStore;

        }else {
            $fileNameToStore = 'noimage.jpg';
        }

       //return $attributes;


        Post::create($attributes);

        return redirect('/posts')->with('success', 'Post Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      //  $post = Post::findOrFail($id);

        //abort_if($post->user_id !== auth()->id(), 403);

        return view('post/show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if (auth()->id() !== $post->user_id) {

            
            return redirect('/posts')->with('error','Unauthorized Page');
        }

        return view('/post/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $attributes = request()->validate([

            'title' => 'required|min:5',
            'body' => 'required|min:5'
        ]);

        if ($request->hasFile('image_name')) {
            
            $fileNameWithExt = $request->file('image_name')->getClientOriginalName();

            //get only file name without extention
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get only extention
            $extention = $request->file('image_name')->getClientOriginalExtension();
           
            //generate name for storage
            $fileNameToStore = $fileName.'_'.time().'.'.$extention;

            //
            $path = $request->file('image_name')->storeAs('public/images/'.auth()->user()->name, $fileNameToStore);

            //add filename to attributes
            $attributes['image_name'] = $fileNameToStore;
        }

        //return $attributes;

        $post->update($attributes);
        

        return redirect('/posts')->with('success', 'Post Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            
            return redirect('/posts')->with('error','Unauthorized Page');
        }

        $post->delete();

        return redirect('/posts')->with('success', 'Post Deleted');
    }
}
