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
    Route::get('/adminuser', function () {
        return view('admin.user',
            [
                "pagetitle" => "User",
            ]
        );
    });
    Route::get('/transaction', function () {
        return view('admin.transaction',
            [
                "pagetitle" => "Transaction",
            ]
        );
    });
    Route::get('/productdetails', function () {
        return view('admin.productdetails',
            [
                "pagetitle" => "Product Details",
            ]
        );
    });
    Route::get('/adminproduct', function () {
        return view('admin.product',
            [
                "pagetitle" => "Product",
            ]
        );
    });
});


Route::middleware(['auth', 'isUser'])->group(function () {
    Route::get('/pesanan', function () {
        return view('user.pesanan',
            [
                "pagetitle" => "Pesanan Saya",
            ]
        );
    });
});

Route::get('/about', function () {
    return view('about',
        [
            "pagetitle" => "Tentang Kami",
        ]
    );
});

Route::get('/contact', function () {
    return view('contact',
        [
            "pagetitle" => "Kontak",
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
            "pagetitle" => "Detail Sneakers",
        ]
    );
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
