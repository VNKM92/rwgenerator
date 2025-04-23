<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RandomWordController;
use App\Http\Controllers\WordGeneratorController;
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
    return view('frontend.dashboard');
    // return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');


//this is user role middleware by partion 2-auth admin & user
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
// });
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
   

        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
 
        Route::match(['get','post'],'/generator/word',[WordGeneratorController::class, 'list']);
        Route::match(['get','post'],'/generator/word/add',[WordGeneratorController::class, 'add']);
        Route::match(['get','post'],'/generator/word/edit/{id}',[WordGeneratorController::class, 'edit']);
        Route::match(['get','post'],'/generator/word/delete/{id}',[WordGeneratorController::class, 'delete']);
         



});



// frontend
Route::any('/generate-word', [RandomWordController::class, 'generateWord']);
Route::get('/generate-word/{firstLetter}/{lastLetter}/{size}', [RandomWordController::class, 'generateWord']);


if (!defined('PROJECT_NAME')) define('PROJECT_NAME','VinayAdmin');
if (!defined('BACKEND_CSS_PATH')) define('BACKEND_CSS_PATH',asset('public'));