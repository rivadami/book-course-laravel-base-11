<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        session(['key' => 'value']);
        session(['key2' => 'value2']);
        //session()->flush();
        //session()->forget('key2');

        $posts = Post::paginate(3);
        return view('dashboard.post.index', compact('posts'));

        //$post = Post::find(8);
        //$post -> delete();

        //$category = Category::find(1);

        //$post = Post::find(9) -> delete();

        //dd($post);
        //dd($post->category->title);
        //dd($category->posts);

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
        //return "index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        //dd($post);
        //dd($categories);
        return view('dashboard.post.create', compact('categories','post'))->with('status', 'Post Created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        // $validator = Validator::make($request->all(),[
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:7',
        //     'posted' => 'required',
        // ]);

        // dd($validator->fails());

        //Post::create($request->all());

        Post::create($request->validated());

        return to_route('post.index');

        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:7',
        //     'posted' => 'required',
        // ]);

        //Post::create($request->all());

        // Post::create(
        //     [
        //         'title' => $request->all()['title'],
        //         'slug' => $request->all()['slug'],
        //         'content' => $request->all()['content'],
        //         'category_id' => $request->all()['category_id'],
        //         'description' => $request->all()['description'],
        //         'posted' => $request->all()['posted'],
        //         'image' => $request->all()['image'],
        //     ]
        // );  

        //dd($request->all());
        //dd($request->all()['title']);
        //dd(request()->get('title'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', ['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        //dd($categories);
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();

        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();

            $request->image->move(public_path('uploads/posts'),$filename);
        }
        
        $post->update($data);
        return to_route('post.index')->with('status', 'Post Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post Deleted');
    }
}
