<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $posts = Post::where('user_id', $user->id)
            ->get()
            ->sortByDesc('created_at');

            return view('mypost')
                ->with('post', $posts);
                

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
        ]);

        $post = new Post();
        $user = auth()->user();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $user->id;

        $post->save();

        return back()->with('status', 'Post added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findorfail($id);

        return view('edit')
            ->with('post', $posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate ([
            'title' => 'required | max: 100',
            'description' => 'required',
        ]);

        $user = auth()->user();

        $posts = Post::findorfail($id);

        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->user_id = $user->id;
        
        $posts->save();
        
        return back()->with('status', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);

        $post->delete();

        return back();
    }
}
