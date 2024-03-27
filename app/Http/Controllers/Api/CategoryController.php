<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryResource::collection(Category::all()) ;
        return $categories ;
    }

    public function show(Category $category)
    {
        $data = new CategoryResource($category) ;
        return $data ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]) ;

        $category = Category::create($request->all()) ;
        return $category ;
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all()) ;
        return $category ;
    }

    public function destroy(Category $category)
    {
        $category->delete() ;
        return 'Deleted successfully' ;
        return response()->json(['status' => 'success', 'message' => 'Deleted successfully'], 200);
    }
}
