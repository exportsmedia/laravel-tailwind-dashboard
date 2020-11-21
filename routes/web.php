<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'DashboardNav'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified', 'DashboardNav']], function () {

    Route::resources([
        'content' => App\Http\Controllers\Dashboard\ContentController::class,
        //'posts' => PostController::class,
    ]);



});










