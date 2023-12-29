<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 投稿の一覧を表示
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // 投稿の作成フォームを表示
    public function create()
    {
        return view('posts.create');
    }

    // 新しい投稿をデータベースに保存
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // 単一の投稿を表示
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // 投稿の編集フォームを表示
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // 既存の投稿を更新
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    // 投稿を削除
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
