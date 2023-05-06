<?php

use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// homepage
Route::get('/', function () {
    return view('home');
})->name('home');
// Route::get('/', [UserController::class, 'index'])->name('home');

// coffee list page
Route::get('/coffee', [CoffeeController::class, 'index'])->name('coffees.index');

// transaction history page
Route::get('/transaction-history', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('dataInsert', [TransactionController::class, 'dataInsert'])->name('dataInsert');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
