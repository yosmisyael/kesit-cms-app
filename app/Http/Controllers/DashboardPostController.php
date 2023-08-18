<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard.post.index', [
            'title' => 'Your Posts',
            'data' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.post.create', [
            'title' => 'Create New Post',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'slug' => ['required', 'unique:posts'],
            'category_id' => ['required'],
            'body' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Post::create($validatedData);

        return redirect('/dashboard/post')->with('success', 'New post has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): view
    {
        return view('dashboard.post.show', [
            'title' => 'Post Detail',
            'data' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        
        return redirect('/dashboard/post')->with('success', 'Your post has been deleted.');
    }

    public function generateSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
