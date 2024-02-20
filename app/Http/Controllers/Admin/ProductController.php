<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Prompts\Prompt;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(100) ;
        // return $products ;
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = Category::all() ;
        $tags = Tag::all() ;
        return view('admin.products.create', compact('categories', 'tags'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ]);
        $requestData = $request->except('tag_ids') ;
        $tagIds = $request->tag_ids ;
        // return $tagIds ;
        if($request->hasFile('photo'))
            $requestData['photo'] = $this->fileUpload();

        $product = Product::create($requestData) ;

        $product->tags()->attach($tagIds);

        return redirect()->route('admin.products.index') ;
    }

    public function show(Product $product){
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product){
        $categories = Category::all() ;
        $tags = Tag::all() ;
        return view('admin.products.edit', compact('product', 'categories', 'tags'));
    }

    public function update(Request $request, Product $product){

        $requestData = $request->except('tag_ids') ;
        if($request->hasFile('photo'))
        {
            if (isset($product->photo) && file_exists(public_path('/files/photos/' . $product->photo))) {
                unlink(public_path('/files/photos/' . $product->photo));
            }
            $requestData['photo'] = $this->fileUpload();

        }
        $tagIds = $request->tag_ids ;

        $product->update($requestData);

        $product->tags()->sync($tagIds);

        return redirect()->route('admin.products.index') ;
    }

    public function destroy(Product $product){
        if (isset($product->photo) && file_exists(public_path('/files/photos/' . $product->photo))) {
            unlink(public_path('/files/photos/' . $product->photo));
        }
        $product->tags()->detach();
        $product->delete();
        return redirect()->route('admin.products.index') ;
    }

    public function fileUpload(){
        $file = request()->file('photo');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('files/photos/', $fileName);
        return $fileName ;
    }

}
