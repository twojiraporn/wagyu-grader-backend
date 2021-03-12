<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportsController;

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

Route::get('/hello', function () {
    return "Hello Laravel";
});

Route::get('/hello/array', function () {
    return [
        'name' => 'Jiraporn Kowootthitam',
        'nickname' => 'Two'
    ];
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/reports', [ReportsController::class, 'index'])
    -> name('reports.index');

//Route::get('/reports', [ReportsController::class, 'show'])
//    ->name('reports.show');
