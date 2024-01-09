<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ExtraImageController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShippingDetailController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\TransactionImageController;
use App\Http\Controllers\TransactionController;
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

    Route::get('/adminuser', [UserController::class, 'showUser']);


    Route::get('/adminproduk', [ProductController::class, "index"])->name('adminproduk');
    Route::get('/adminfotoproduk/{product}', [ProductController::class, 'show'])->name('adminfotoproduk');
    Route::post('/adminfotoproduk/{product}', [ProductImageController::class, 'addImage'])->name('adminfotoproduk.store');
    Route::delete('/adminfotoproduk/{product}', [ProductImageController::class, 'destroy'])->name('adminfotoproduk.destroy');

    Route::get('/adminextra', [ExtraController::class, "index"])->name('adminextra');
    Route::get('/adminfotoextra/{extra}', [ExtraController::class, 'show'])->name('adminfotoextra');
    Route::post('/adminfotoextra/{extra}', [ExtraImageController::class, 'addImage'])->name('adminfotoextra.store');
    Route::delete('/adminfotoextra/{extra}', [ExtraImageController::class, 'destroy'])->name('adminfotoextra.destroy');



    Route::get('/adminreview/{user}', [ReviewController::class, 'showReview'])->name('adminreview');
    Route::delete('/adminreview/{review}', [ReviewController::class, 'destroy'])->name('adminreview.destroy');

    Route::get('/admintransaksi/{user}', [TransactionController::class, 'showTransaction'])->name('admintransaksi');
    Route::get('/adminfototransaksi/{transaction}', [TransactionController::class, 'show'])->name('adminfototransaksi');
    Route::get('/adminfototransaksiedit/{transaction}', [TransactionController::class, 'showEdit'])->name('adminfototransaksiedit');
    Route::post('/adminfototransaksiedit/{transaction}', [TransactionImageController::class, 'addImage'])->name('adminfototransaksiedit.store');
    Route::delete('/adminfototransaksiedit/{transaction}', [TransactionImageController::class, 'destroy'])->name('adminfototransaksiedit.destroy');

    Route::get('/adminshipping/{transaction}', [ShippingDetailController::class, 'showShipping'])->name('adminshipping');
    Route::get('/adminshippingedit/{transaction}', [ShippingDetailController::class, 'editShipping'])->name('adminshippingedit');
    Route::put('/adminshipping/{transaction}', [ShippingDetailController::class, 'update'])->name('adminshippingupdate');

    Route::get('/adminalamat/{shipping}', [ShippingDetailController::class, 'showAlamat'])->name('adminalamat');


    Route::get('/adminalamat', function () {
        return view(
            'admin.alamat',
            [
                "pagetitle" => "Admin Alamat",
            ]
        );
    });
});


Route::middleware(['auth', 'isUser'])->group(function () {
    Route::get('/pesanan', function () {
        return view(
            'user.pesanan',
            [
                "pagetitle" => "Pesanan Saya",
            ]
        );
    });
});

Route::get('/about', [ProductController::class, 'userabout']);

Route::get('/contact', function () {
    return view(
        'contact',
        [
            "pagetitle" => "Kontak",
        ]
    );
});



Route::get('/', [ProductController::class, 'userindex']);

Route::get('/sneakers', [TransactionController::class, 'index']);

Route::get('/signup', function () {
    return view(
        'auth.signup',
        [
            "pagetitle" => "Sign Up",
        ]
    );
})->name('signup');

Route::get('/signin', function () {
    return view(
        'auth.signin',
        [
            "pagetitle" => "Sign In",
        ]
    );
});


Route::get('/detail/{transaction}', [CityController::class, 'index'])->name('detail');

Route::post('/detail/{transaction}', [CityController::class, 'cekOngkir'])->name('cekOngkir');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
