<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Post;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$post = Post::find(8);
        //$post -> delete();

        $post = Post::find(10);
        $category = Category::find(1);
        
        //$post = Post::find(9) -> delete();

        //dd($post);
        //dd($post->category->title);
        dd($category->posts);

        // $post -> update(
        //     [
        //         'title' => 'testPPP',
        //         'slug' => 'test',
        //         'content' => 'test',
        //         'category_id' => 1,
        //         'description' => 'test',
        //         'posted' => 'not',
        //         'image' => 'test',
        //     ]
        // );
/*
        dd($post->title);

        Post::create(
            [
                'title' => 'test',
                'slug' => 'test',
                'content' => 'test',
                'category_id' => 1,
                'description' => 'test',
                'posted' => 'not',
                'image' => 'test',
            ]
        );
*/
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
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
        //
    }
}
