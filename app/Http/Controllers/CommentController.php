<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
//        dd($post->id);

        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        $comment = new Comment([
            'name' => strip_tags($request->input('name')),
            'comment' => strip_tags($request->input('comment')),
        ]);

        $user = Auth::user();
        if ($post) {
            $comment->post_id = $post->id;
            $post->comments()->save($comment);
        }

        $user->comments()->save($comment);

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
