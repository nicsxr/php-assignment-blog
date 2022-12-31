<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create($request->all());
        return redirect('/main/1');
    }
}
