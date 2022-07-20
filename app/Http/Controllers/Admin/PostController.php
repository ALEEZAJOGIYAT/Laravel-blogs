<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\post;
use App\Models\user\category;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // return view('admin.post.post');

            $blogPosts = post::all();
            return view('admin.post.show',compact('blogPosts',$blogPosts));
            //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::all();
        return view('admin.post.post',compact('categories'));


    }

    public function store(Request $request)
    {
            $post = post::create([
                'title' => $request->title,
                'subtitle'=> $request->subtitle,
                'slug'  =>$request->slug,
                'body' =>$request->body,

            ]);

            $post->save();
            $post->categories()->sync($request->categories);

            return redirect( route('post.index'));
    }

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
        $editPost =post::with('categories')->where('id',$id)->first();
        $categories=category::all();

        return view('admin.post.edit',compact('editPost','categories'));
        //
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
        //
        return $request->all();
        $post = post::find($id);
        $post->title = $request ->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
 
        $post->save();
        $post->categories()->sync($request->categories);

        return redirect( route('post.index'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
        //
    }
}
