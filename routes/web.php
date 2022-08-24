<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectorController;

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
    return view('index');
});

Route::get('/sectors', [SectorController::class, 'index']);

Route::get('/sectors/{sector:slug}', [SectorController::class, 'show'])->whereIn('sector', ['commercial', 'residential', 'people']);

Route::view('/about', 'about');

// Kitchen Sink Style Guide (Development Only)
Route::view('/kitchen-sink', 'kitchen-sink');