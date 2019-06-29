<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }
    public function index()
    {
        return CategoryResource::collection(Category::latest()->get());
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        Category::create($request->all());
        $category = new Category;
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();

        return response('Created',201);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'name'      => $request->name,
            'slug'      => str_slug($request->name),
        ]);
        return response('Updated',201);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response('Deleted',201);
    }
}
