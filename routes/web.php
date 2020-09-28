<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


// Route::get('/', function () {
//     return view('welcome');
// });

// // Closure
// Route::get('/profil', function () {
//     return "ini adalah profil siswa";
// })->name('profil');

// // Route name
// Route::get('/tesname', function () {
//     return route('profil');
// });

// // Parameter
// Route::get('/profil/{name}', function ($name) {
//     return $name;
// });

// // Controller
// Route::get("/testcontroller", "TestController@show");

// // Resource
// Route::resource('siswa', 'SiswaController');
