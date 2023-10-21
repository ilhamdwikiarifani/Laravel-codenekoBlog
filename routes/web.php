<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('berita/{post:slug}', [LandingController::class, 'berita']);



// Route::get('post', function () {
//     return view('post.postSingle');
// });


Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');



Route::middleware([auth::class])->group(
    function () {

        Route::get('admin', function () {
            return view('backEnd.layout.home');
        });

        // Kategori -> admin
        Route::resource('kategori', KategoriController::class);

        // Post -> admin 
        Route::resource('post', PostController::class);
        Route::get('status/{status:name}', [PostController::class, 'cekStatus']);
        Route::get('category/{kategori:title}', [PostController::class, 'sortCategory']);
    }
);
