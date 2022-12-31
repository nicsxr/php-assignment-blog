<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('main.index', compact('posts'));
    }

    public function create()
    {
        return view('main.create');
    }

    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        $comments = Comment::where('post_id', $id)->get();
        return view('main.show', ['post'=>$post, 'comments'=>$comments]);
    }
    
    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('/main');
    }

    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->fill($request->all())->save();
        return redirect("/main");
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
        return redirect('/main');
    }    
}
