<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class BlogController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['post'] = Post::with(['category', 'author'])->paginate(10)->withQueryString();
        return view('welcome', $this->data);
    }

    public function detail(Post $post)
    {
    }
}
