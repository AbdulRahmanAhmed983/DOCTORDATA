<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [DoctorController::class,'index'])->name('index');
Route::get('/show-doctors/{id}',[DoctorController::class,'showDoctor'])->name('showDoctor');
Route::get('/Add-doctor', [DoctorController::class,'AddDoctor'])->name('AddDoctor');
Route::post('/store-doctor', [DoctorController::class,'StoreDoctor'])->name('StoreDoctor');
Route::get('/Edit-doctor/{id}',[DoctorController::class,'EditDoctor'])->name('EditDoctor');
Route::post('/Update-doctor/{id}', [DoctorController::class,'UpdateDoctor'])->name('UpdateDoctor');
Route::get('/import-doctors',[DoctorController::class,'showimportDoctor'])->name('showimportDoctor');
Route::post('/store-doctors',[DoctorController::class,'storeimportDoctor'])->name('import');
Route::get('/delete/{id}',[DoctorController::class,'delete'])->name('delete');

Route::fallback(function(){
    return '<h1>This Page Not Found</h1>';
});

