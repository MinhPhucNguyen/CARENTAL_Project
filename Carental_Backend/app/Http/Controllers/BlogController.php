<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('client.blog.blog');
    }

    public function show($slug)
    {
        return view('client.blog.blog-detail', compact('slug'));
    }
}
