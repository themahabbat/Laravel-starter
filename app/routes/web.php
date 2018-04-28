<?php


Route::view('/', 'pages.index');

// Auth
Route::any('/signout', 'AuthCR@logout')->middleware('auth');

Route::middleware('guest')->group(function(){
  Route::view('/signin', 'pages.auth.signin');
  Route::view('/signup', 'pages.auth.signup');
  
  Route::post('/signin', 'AuthCR@login')->name('login');
  Route::post('/signup', 'AuthCR@register')->name('register');
});
