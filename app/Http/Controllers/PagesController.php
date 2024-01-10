<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function design(){
        return view('pages.design');
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
