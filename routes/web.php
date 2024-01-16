<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
    return view('Login.Login');
});

Route::get('/register', [AppController::class, 'register']);
Route::get('/dashboardAdmin', [AppController::class, 'admin']);
Route::get('/dashboardAdmin/book', [AppController::class, 'book']);
Route::get('/dashboardAdmin/bookList', [AppController::class, 'bookList']);
Route::get('/dashboardAdmin/book/add', [AppController::class, 'bookAdd']);
Route::get('/dashboardAdmin/book/update', [AppController::class, 'bookUpdate']);
Route::get('/dashboardAdmin/category', [AppController::class, 'category']);
Route::get('/dashboardAdmin/category/add', [AppController::class, 'categoryAdd']);
Route::get('/dashboardAdmin/category/update', [AppController::class, 'categoryUpdate']);
Route::get('/dashboardAdmin/users', [AppController::class, 'users']);
Route::get('/dashboardAdmin/users/banned', [AppController::class, 'usersBanned']);
Route::get('/dashboardAdmin/users/resgired', [AppController::class, 'usersResgired']);
Route::get('/dashboardAdmin/users/detail', [AppController::class, 'usersDetail']);
Route::get('/dashboardAdmin/returnBook', [AppController::class, 'returnBook']);
Route::get('/dashboardUser/rentLog', [AppController::class, 'rentLog']);
Route::get('/dashboardUser/profile', [AppController::class, 'profile']);
Route::get('/dashboardUser/listBook', [AppController::class, 'listBook']);
