<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function show($sub, $id)
    {
        $post = Post::where('id', $id)->first();
        $comments = Comment::where('post_id', $id)->get();
        return view('admin.show', compact('post', 'comments'));
    }
    
    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->fill($request->all())->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find('id', $id);
        $post->delete();
        return redirect('/');
    }

    public function destroyComment($sub, $id)
    {
        $post = Post::find('id', $id);
        $post->delete();
        return redirect('/');
    }
    
}
