<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestController ;
use Illuminate\Support\Facades\Route ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PagesController::class, 'index']) ;

Route::get('/form/{count}', [PagesController::class, 'form']) ;
Route::post('/create', [PagesController::class, 'create']) ;

Route::prefix('pages')->name('pages.')->group(function(){
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
    Route::get('/design', [PagesController::class, 'design'])->name('design');
    Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    });

    Route::resource('products', ProductController::class) ;
    Route::resource('messages', ProductController::class)->only('index', 'show', 'destroy') ;
});



