<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(User $user): View
    {
        return view('posts', [
            'title' => "Article by $user->name",
            'active' => 'article',
            'data' => $user->posts->load('category', 'author'),
        ]);
    }
}
