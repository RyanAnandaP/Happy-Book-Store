<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;


Route::get('/',[homepageController::class,'homepage']);
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/publisher',[homepageController::class,'publishers']);
Route::get('/category/{id}',[homepageController::class,'category']);
Route::get('/bookdetail/{id}',[homepageController::class,'bookdetail']);






