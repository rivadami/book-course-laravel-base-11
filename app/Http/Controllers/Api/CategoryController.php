<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function all()
    {
        return response()->json(Category::get());
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Category::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function slug(Category $category)
    {
        //$category = Category::where('slug',$slug)->firstOrFail();
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('ok');
    }
}
