<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $items = Post::with(['user'])->where('user_id', '=', $id)->get();
        return view('pages.admin.post.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Post::all();
        return view('pages.admin.post.create');
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
            'title'=>'required',
            'description'=>'required'
        ]);
         $data = $request->all();

         Post::create($data);

         return redirect()->route('posts.index')->with('status','Data Posts berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
        return view('pages.admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
         return view('pages.admin.post.edit',compact('post'));
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
        $request->validate([
            'user_id'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);
        $data = $request->all();
        $item = Post::find($post->id);
        $item->update($data);
       
       // Post::where('id',$post->id)->update([
       //      'title'=>$request->title,
       //      'user_id'=>$request->user_id,
       //      'description'=>$request->description,
       // ]);

        return redirect()->route('posts.index')->with('status','Data Mahasiswa berhasil DiUbah!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Post::findorFail($id);
        $item->delete();

        return redirect()->route('posts.index')->with('status','Data Posts berhasil Dihapus');
    }
}
