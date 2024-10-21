<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index(): View|Factory|Application
    {

        $categories = Cache::remember('categories', now()->addMinute(), function () {
            return Category::whereHas('posts', function ($query) {
                $query->published();
            })->take(10)->get();
        });

        return view(
            'posts.index',
            [
                'categories' => $categories,
            ]
        );
    }

    public function show(Request $request, Post $post): View|Factory|Application
    {
        Visitor::query()->create([
            'user_id' => auth()->id(),
            'visitable_type' => Post::class,
            'visitable_id' => $post->id,
            'page_title' => $post->title,
            'page_url' => route('posts.show', $post),
            'referrer' => $request->header('referer'),
            'user_agent' => $request->userAgent(),
            'ip_address' => $request->ip(),
        ]);
        return view(
            'posts.show',
            [
                'post' => $post,
            ]
        );
    }
}
