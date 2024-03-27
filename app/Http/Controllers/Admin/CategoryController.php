<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Jobs\CategoryCreateJob;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get() ;
        // return $categories ;
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]) ;
        $requestData = $request->all() ;

        $user = auth()->user();
        CategoryCreateJob::dispatch($requestData, $user) ;

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $requestData = $request->all() ;
        $category->update($requestData) ;
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $user= auth()->user();
        event(new AuditEvent($category, $user, 'Delete', request()->ip())) ;
        $category->delete();
        return redirect()->route('admin.categories.index')->with('danger', 'Category deleted successfully'); ;
    }
}
