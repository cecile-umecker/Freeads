<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddController;


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

Route::get('/', [IndexController::class, 'showIndex']);

## REGISTER
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'store']);

## LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])
    ->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

##HOME
Route::get('/home', [UserController::class, 'showHome']);

##ACCOUNT
Route::get('/account', [UserController::class, 'showAccount'])
    ->middleware('auth');
Route::post('/account/{id}/update', [UserController::class, 'update'])
    ->middleware('auth')
    ->name('accountUpdate');

##ADD
Route::get('/searchAdd', [AddController::class, 'showAdd'])
    ->middleware('auth');
Route::get('/post', [AddController::class, 'showPost'])
    ->middleware('auth');
Route::post('/post', [AddController::class, 'create']);
Route::get('/adPage', [AddController::class, 'showAdPage']);

##MESAGE
Route::get('/message', [UserController::class, 'showMessage']);


##LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');




