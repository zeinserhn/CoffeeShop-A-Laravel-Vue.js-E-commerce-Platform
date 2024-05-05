<?php

use App\Models\Post;
//use Inertia\Inertia;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Rules\ConfirmPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddresseController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AddresseOptionsController;
use App\Http\Controllers\Auth\RegistrationController;

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
        return inertia('Home');
    })->name('home');
    Route::get('/login',[LoginController::class,'create'])->name('login');
    Route::post('/login',[LoginController::class,'store'])->name('login');
    Route::get('/register',[RegistrationController::class,'create']);
    Route::post('/register',[RegistrationController::class,'store']);
    Route::get('products',[ProductsController::class, 'index']);
    Route::get('/cart', function () {
        return Inertia('Cart');
    })->name('cart.index');
    Route::get('/address', [AddresseController::class, 'index'])->name('address.index');


Route::middleware('auth')->group(function () {
    Route::get('/address_options', [AddresseOptionsController::class, 'index'])->name('address_options.index');
    Route::post('/address_options', [AddresseOptionsController::class, 'store'])->name('address_options.store');
    Route::delete('/address_options/{id}', [AddresseOptionsController::class, 'destroy'])->name('address_options.destroy');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/updatePassword', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::post('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



    Route::get('/account',[UserController::class,'index'])->name('account');


Route::post('logout',[LoginController::class,'destroy']);




