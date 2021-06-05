<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\UserController;

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

/*
Route::get('/', function () {
    
    return view('welcome');
});
*/

Route ::get('/usuario', [App\Http\Controllers\UserController::class, 'listUser'])->name('users.listUsers');
Route ::get('/usuario/novo', [App\Http\Controllers\UserController::class, 'addUser'])->name('users.formAdd');
Route ::get('/usuario/{user}', [App\Http\Controllers\UserController::class, 'userId'])->name('users.idUser');

Route ::post('/usuario/store', [App\Http\Controllers\UserController::class, 'storeUser'])->name('users.store');

Route::delete('/usuario/destroy{user}', [App\Http\Controllers\UserController::class, 'destroyUser'])->name('user.destroy');


