<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
      $posts = Post::all();
      return view('front.posts', compact('posts'));
    }
}
