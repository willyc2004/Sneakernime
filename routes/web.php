<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index',
    [
        "pagetitle" => "Home",
    ]
);
});

Route::get('/sneakers', function () {
    return view('Sneakers',
    [
        "pagetitle" => "Sneakers",
    ]
);
});

Route::get('/about', function () {
    return view('about',
    [
        "pagetitle" => "About Us",
    ]
);
});

Route::get('/contact', function () {
    return view('contact',
    [
        "pagetitle" => "Contact Us",
    ]
);
});

Route::get('/signup', function () {
    return view('signup',
    [
        "pagetitle" => "Sign Up",
    ]
);
});

Route::get('/signin', function () {
    return view('signin',
    [
        "pagetitle" => "Sign In",
    ]
);
});
