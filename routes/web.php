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

use App\Http\Controllers\Step;


Route::get('/', [Step::class, 'show']);
Route::post('/step/basic', [Step::class, 'basic']);

Route::get('/step-one', function () {
    return view('step_one');
});

Route::get('/step-two', function () {
    return view('step_two');
});

Route::get('/step-three', function () {
    return view('step_three');
});

Route::get('/step-four', function () {
    return view('step_four');
});
