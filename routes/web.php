<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AuthController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/home', function () {
        return view('home');
    });

});


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return redirect('/login');
    });

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::middleware(['auth'])->group(function () {
//  Route::controller(ClientsController::class)->group(function () {
//    Route::get('/home', 'index')->name("home");
//    Route::post('/home', 'store')->name("store");
//    Route::get('/cliente/create', 'create')->name("create");
//    Route::get('/cliente/edit/{id}', 'edit')->name("editar");
//    Route::patch('/home/{id}', 'update')->name("update");
//    Route::delete('/delete/{id}', 'destroy')->name("delete");
//    Route::get('/detalhes', 'detalhes')->name("detalhes");
//  });
//});

Route::controller(ClientsController::class)->group(function () {
    Route::get('/home', 'index')->name("home");
    Route::post('/home', 'store')->name("store");
    Route::get('/cliente/create', 'create')->name("create");
    Route::get('/cliente/edit/{id}', 'edit')->name("editar");
    Route::patch('/home/{id}', 'update')->name("update");
    Route::delete('/delete/{id}', 'destroy')->name("delete");
    Route::get('/detalhes', 'detalhes')->name("detalhes");
    Route::get('/buscarCPF', 'buscarCPF')->name('buscarCPF');
  });




