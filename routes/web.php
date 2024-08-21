<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

// use App\Models\Product;

// use Illuminate\Support\Facades\DB;

//Route::get('/', function () {
// $result DB::table('categories')->where('name','كاميرات')->get();

   // dd($result);

   // return view('welcome',['categories'=>$result]);
//});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/product', function () {
//     return view('layouts.product');
// });
Route::get('/category', function () {
    return view('layouts.category');
});
// Route::get('/about', function () {
//     return view('layouts.about');
// });


Route::get('/', [CategoryController::class,'showAllCategories']);
 Route::get('/product', [ProductController::class,'showAllProducts']);

 Route::get('/about', [AboutController::class,'index'])->name('about');

//  Route::get('/homepr', [App\Http\Controllers\HomeController::class, 'showProducts'])->name('products');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\loginController::class, 'index'])->name('login');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'showCategories'])->name('categories');
Route::get('/admin/categories/create', [App\Http\Controllers\HomeController::class, 'adminCreateCategory'])->name('adminCreateCategory');

Route::post('/admin/categories/store', [App\Http\Controllers\HomeController::class, 'adminCategoryStore'])->name('adminCategoryStore');

Route::get('/admin/categories/edit/{id}', [App\Http\Controllers\HomeController::class, 'adminEditCategory'])->name('adminEditCategory');
Route::post('/admin/categories/update/{id}', [App\Http\Controllers\HomeController::class, 'adminCategoryUpdate'])->name('adminCategoryUpdate');

Route::get('/admin/categories/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminDeleteCategory'])->name('adminDeleteCategory');
Route::post('/admin/categories/destroy/{id}', [App\Http\Controllers\HomeController::class, 'adminCategoryDestroy'])->name('adminCategoryDestroy');




////product ////
// Route::get('/homepr', [App\Http\Controllers\HomeController::class, 'showProducts'])->name('products');
// Route::get('/admin/products/create', [App\Http\Controllers\HomeController::class, 'adminCreateProduct'])->name('adminCreateProduct');
// Route::post('/admin/products/store', [App\Http\Controllers\HomeController::class, 'adminProductStore'])->name('adminProductStore');
// Route::get('/admin/products/edit/{id}', [App\Http\Controllers\HomeController::class, 'adminEditProduct'])->name('adminEditProduct');
// Route::post('/admin/products/update/{id}', [App\Http\Controllers\HomeController::class, 'adminProductUpdate'])->name('adminProductUpdate');
// Route::get('/admin/products/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminDeleteProduct'])->name('adminDeleteProduct');
// Route::post('/admin/products/destroy/{id}', [App\Http\Controllers\HomeController::class, 'adminProductDestroy'])->name('adminProductDestroy');
