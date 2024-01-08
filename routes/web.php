<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\SoldProductsController;
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
                "pagetitle" => "Admin Dashboard",
            ]
        );
    });
    Route::get('/adminuser', [UserController::class, 'showUser']);
    Route::get('/admintransaksi', function () {
        return view('admin.transaksi',
            [
                "pagetitle" => "Admin Transaksi",
            ]
        );
    });
    Route::get('/admindetailproduksold', function () {
        return view('admin.detailproduksold',
            [
                "pagetitle" => "Admin Detail Produk Sold",
            ]
        );
    });

    Route::get('/adminproduk', [ProductController::class,"index"]);
    Route::get('/adminfotoproduk/{product}', [ProductController::class, 'show'])->name('adminfotoproduk');
    Route::post('/adminfotoproduk/{product}', [ProductImageController::class, 'addImage'])->name('adminfotoproduk.store');
    Route::delete('/adminfotoproduk/{product}', [ProductImageController::class, 'destroy'])->name('adminfotoproduk.destroy');

    Route::get('/adminextra', [ExtraController::class,"index"]);
    Route::get('/adminfotoextra/{extra}', [ProductController::class, 'show'])->name('adminfotoproduk');
    Route::post('/adminfotoextra/{extra}', [ProductImageController::class, 'addImage'])->name('adminfotoproduk.store');
    Route::delete('/adminfotoextra/{extra}', [ProductImageController::class, 'destroy'])->name('adminfotoproduk.destroy');


    Route::get('/adminfotoproduksold', function () {
        return view('admin.fotoproduksold',
            [
                "pagetitle" => "Admin Foto Produk Sold",
            ]
        );
    });


    Route::get('/adminreview', function () {
        return view('admin.review',
            [
                "pagetitle" => "Admin Review",
            ]
        );
    });
    Route::get('/adminshipping', function () {
        return view('admin.shipping',
            [
                "pagetitle" => "Admin Shipping",
            ]
        );
    });

    Route::get('/adminalamat', function () {
        return view('admin.alamat',
            [
                "pagetitle" => "Admin Alamat",
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

Route::get('/sneakers', [SoldProductsController::class, 'index']);

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


Route::get('/detail', [CityController::class, 'index']);

Route::post('/detail', [CityController::class, 'cekOngkir']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
