<?php

namespace App\Http\Controllers;

// Memanggil Model Post
use App\Models\Post;

class PostController extends Controller
{
    public function tampil() {

        // Menampilkan semua data dari model Post
        // Model Post mewakili data dari table 'posts'
        // atau sama dengan query -> select * from posts
        $post = Post::all();
        return view('post.index', compact('post'));

    }
}
