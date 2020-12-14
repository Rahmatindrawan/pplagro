<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ViewController extends Controller
{
    public function index()
    {
        $post = Post::all(); // Mengambil semua pegawai.

        return view('posts.view', ['Post' => $post]);
    }
}
