<?php

use App\Http\Controllers\HomeController;
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
    return view('auth.signup',
    [
        "pagetitle" => "Sign Up",
    ]
);
});

Route::get('/signin', function () {
    return view('auth.signin',
    [
        "pagetitle" => "Sign In",
    ]
);
});

Route::get('/detail', function () {
    return view('detail',
    [
        "pagetitle" => "Sneakers Details",
    ]
);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
