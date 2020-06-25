<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Public Posts Archive
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('guest.posts.index', compact('posts'));
    }
}