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

//admin
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index',
            [
                "pagetitle" => "Dashboard",
            ]
        );
    });
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



Route::get('/signup', function () {
    return view('auth.signup',
        [
            "pagetitle" => "Sign Up",
        ]
    );
})->name('signup');

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
