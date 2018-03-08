<?php


Route::view('/', 'pages.index');
Route::view('/signin', 'pages.auth.signin')->middleware('guest');
Route::view('/signup', 'pages.auth.signup')->middleware('guest');

// Auth
Route::any('/signout', 'AuthCR@logout')->middleware('auth');

Route::middleware('guest')->group(function(){
  Route::post('/signin', 'AuthCR@login')->name('login');
  Route::post('/signup', 'AuthCR@register')->name('register');
});
