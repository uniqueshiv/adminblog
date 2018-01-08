<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\user\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responcleare
     */
    public function index()
    {
          $posts=post::all();
          return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'title'=>'required',
          'subtitle'=>'required',
          'slug'  =>'required',
          'body'=>'required',

        ]);
      //  return $request;
      $post=new post;
      $post->title=$request->title;
      $post->subtitle=$request->subtitle;
      $post->slug=$request->slug;
      $post->body=$request->body;
      $post->status=$request->status;
      $post->save();
      return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post=post::where('id',$id)->first();
      //return $post;
      return view('admin.post.edit',compact('post'));
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
      $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required',
        'slug'  =>'required',
        'body'=>'required',
      ]);
    //  return $request;
    $post=post::find($id);
    $post->title=$request->title;
    $post->subtitle=$request->subtitle;
    $post->slug=$request->slug;
    $post->body=$request->body;
    $post->status=$request->status;
    $post->save();
    return redirect(route('post.index'));
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
    }
}
