<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        $products = Product::latest()->take(3)->paginate(3) ;
        return view('pages.index', compact('products'));
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function design(){
        $products = Product::latest()->paginate(3) ;
        return view('pages.design', compact('products'));
    }

    public function shop(){
        return view('pages.shop');
    }

    public function form($count){
        return view('form', compact('count'));
    }

    public function create(Request $request){

        $data = DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
            'status' => $request->status,
        ]);

        if ($data)
            return "Success" ;

    }
}
