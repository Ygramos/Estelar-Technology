<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosModelController;
use App\Http\Controllers\userController;
use App\Models\ProductosModel;
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

Route::get('/', [HomeController::class, 'index'])->name('home.app');
Route::get('dashboard', function () {
    $produtos = ProductosModel::all();
    return view('admin.overView', compact('produtos'));
})->name('dasboard.inicio')->middleware('auth');
Route::resource('Productos', ProductosModelController::class);
Route::get('login', [userController::class, 'login'])->name('login');
Route::post('login/validate', [userController::class, 'validateLogin'])->name('login.validate');
Route::get('registrar', [userController::class, 'index'])->name('register');
Route::post('newUser', [userController::class, 'register'])->name('newUser');
Route::post('update-product/{id}', [ProductosModelController::class, 'update'])->name('update.Productos');
Route::post('delete-producto/{id}', [ProductosModelController::class, 'destroy'])->name('delete.productos');
Route::get('lagout',[userController::class,'logout'])->name('logout');
