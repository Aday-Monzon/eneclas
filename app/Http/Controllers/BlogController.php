<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate();

        return view('blog', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * $posts->perPage());
    }
}
