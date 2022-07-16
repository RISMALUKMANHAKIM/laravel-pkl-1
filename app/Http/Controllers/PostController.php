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

    public function search($id) {

        // Mencari data dari model Post berdasarkan id
        // Query -> select * from posts where id = $id
        $post = Post::find($id);
        return $post;

    }

    public function search_title($title) {

        // Mencari data dari model Post berdasarkan id
        // Query -> select * from posts where title like %title%
        $post = Post::where('title', 'like', '%' . $title . '%')->get();
        return $post;

    }

    public function edit($id, $a, $b) {

        // Mengedit data Post berdasarkan id
        $post = Post::find($id);
        $post->title = $a;
        $post->content = $b;
        $post->save();

        return $post;

    }

    public function tambah($a, $b) {

        // Menambah data baru di model Post
        $post = new Post;
        $post->title = $a;
        $post->content = $b;
        $post->save();
        
        return $post;

    }

    public function hapus($id) {

        // Menghapus data di model Post berdasarkan id
        $post = Post::find($id);
        $post->delete();
        
        // return $post;
        return redirect('post');

    }
}
