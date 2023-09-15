<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SurveyCon;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('index');
// });
// Route::get('/home', function () {
//     return view('index');
// });

Route::middleware(['auth'])->group(function () {

});

Route::get('/forms', [SurveyCon::class, 'forms'])->name('forms');
Route::get('/form_survey', [SurveyCon::class, 'form1'])->name('form1');
Route::get('/form_profile', [SurveyCon::class, 'form2'])->name('form2');
Route::get('/form_fuel', [SurveyCon::class, 'form3'])->name('form3');
Route::get('/form_cook', [SurveyCon::class, 'form4'])->name('form4');
Route::post('/store', [SurveyCon::class, 'store'])->name('store');
Route::post('/storetwo', [SurveyCon::class, 'storetwo'])->name('storetwo');
Route::post('/store3', [SurveyCon::class, 'store3'])->name('store3');
Route::post('/store4', [SurveyCon::class, 'store4'])->name('store4');
Route::post('/store5', [SurveyCon::class, 'store5'])->name('store5');
Route::get('/home', [SurveyCon::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/search/{id}', [SurveyCon::class, 'search'])->name('search');
Route::get('/display', [SurveyCon::class, 'display'])->name('display');
Route::get('/show/{id}', [SurveyCon::class, 'show1'])->name('show1');












