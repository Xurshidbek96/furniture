<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      $name1 = $request->name1 ;
      $quantity1 = $request->quantity1 ;
      $price1 = $request->price1 ;
      $total1 = $quantity1 * $price1 ;

      $name2 = $request->name2 ;
      $quantity2 = $request->quantity2 ;
      $price2 = $request->price2 ;
      $total2 = $quantity2 * $price2 ;

      $total = $total1 + $total2 ;

      return "$name1 : $price1 x $quantity1 = ". $total1."<br>"."$name2 : $price2 x $quantity2 = ". $total2."<br>". "<h3> Total = $total</h3>";

    }
}
