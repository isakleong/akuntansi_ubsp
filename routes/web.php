<?php

use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/', function () {
    return view('main.index');
}); 

Route::get('/saving/add', function () {
    return view('main.add-tabungan');
})->name('saving');

Route::get('/saving/recap', function () {
    return view('main.rekap-tabungan');
})->name('saving-recap');

// Route::middleware(['auth'])->group(function() {
//     Route::get('/', function () {
//         return view('main.index');
//     }); 
// });