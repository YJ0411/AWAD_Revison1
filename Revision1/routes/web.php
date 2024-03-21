<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;


Route::view('/','welcome',['username'=>'YJ']);

Route::get('/home', function($username='YJ'){
    // return view('welcome')->with('username', $username);
    redirect('about');
});

Route::view('about','about');

Route::get('contact',function(){
    return view('contact');
});

Route::get('users/{user?}',[Users::class,'index']);