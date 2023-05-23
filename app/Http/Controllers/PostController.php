<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Membaca semua postingan, lalu mengirimnya sebagai tampilan utama
    public function index()
    {
        $post = Post::all();
        $data = [
            'post' => $post,
        ];
        return view('index', $data);
    }

    // Menambahkan postingan baru
    public function create(Request $req)
    {
        $post = Post::create([
            'topik' => $req->topik,
            'materi' => $req->materi,
            'konten' => $req->konten,
            'keterangan' => $req->keterangan,
        ]);

        return redirect()->route('post.index')->with('status', 'Tambah Data Berhasil');
    }

    // Membaca salah satu postingan, lalu mengirimnya ke halaman editing
    public function editPage($id)
    {
        $post = Post::find($id);
        $data = [
            'post' => $post,
        ];
        return view('editPost', $data);
    }

    // Mengubah salah satu postingan
    public function update(Request $req)
    {
        $post = Post::where('id', $req->id)->update([
            'topik' => $req->topik,
            'materi' => $req->materi,
            'konten' => $req->konten,
            'keterangan' => $req->keterangan,
        ]);

        return redirect()->route('post.index')->with('status', 'Edit Data Berhasil');

    }

    // Menghapus salah satu postingan
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index')->with('status', 'Hapus Data Berhasil');

    }
}