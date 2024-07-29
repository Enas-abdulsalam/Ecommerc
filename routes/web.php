<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\DB;

//Route::get('/', function () {
// $result DB::table('categories')->where('name','كاميرات')->get();

   // dd($result);

   // return view('welcome',['categories'=>$result]);
//});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('layouts.product');
});
Route::get('/category', function () {
    return view('layouts.category');
});
