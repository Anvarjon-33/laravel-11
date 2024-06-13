<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Images;
use App\Models\Post;

class PostImageComment extends Controller
{
    public function index()
    {

        $posts = Post::all();
        $images = Images::all();
        $comments = Comments::all();

        return view('ViewPost', compact(['posts', 'images', 'comments']));

    }

    public function post_save()
    {

    }

    public function image_save()
    {

    }

    public function comment_save()
    {

    }
}
