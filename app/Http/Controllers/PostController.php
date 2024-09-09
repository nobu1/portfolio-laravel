<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::paginate(5);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();
        $post = Post::create($validated);
        $request->session()->flash('message', '記事を作成しました。記事一覧をクリックして確認してください');

        return view('post.create');
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();
        $post->update($validated);
        $request->session()->flash('message', '更新しました');
        
        return redirect()->route('post.show', compact('post'));
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('post.index');
    }

    public function search(Post $post)
    {
        return view('post.search', compact('post'));
    }

    public function find(Request $request, Post $post)
    {
        $posts = Post::where('title', 'LIKE', "%{$request->title}%")->get();
        $searchNumber = Post::where('title', 'LIKE', "%{$request->title}%")->count();
        $request->session()->flash('message', '検索結果は'.$searchNumber.'件でした');
        
        return view('post.search-result', compact('posts'));
    }
}
