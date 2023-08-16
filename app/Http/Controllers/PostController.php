<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $title = ''; 
        
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = "Article in $category->name category";
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = "Article from $author->username";
        }

        return view('posts', [
            'title' => $title === '' ? 'Article List' : $title,
            'active' => 'article',
            'data' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function get(Post $post): View
    {
        $title = $post->title;

        return view('article', [
            'title' => $title,
            'active' => 'article',
            'data' => $post
        ]);
    }
}
