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


Route::get('/', [Step::class, 'basic']);
Route::post('/', [Step::class, 'save']);

Route::get('personal', [Step::class, 'personal'])->name('personal');
Route::post('personal', [Step::class, 'save']);

Route::get('home', [Step::class, 'home'])->name('home');
Route::post('home', [Step::class, 'save']);

Route::get('materials', [Step::class, 'materials'])->name('materials');
Route::post('materials', [Step::class, 'save']);

Route::get('extras', [Step::class, 'extras'])->name('extras');
Route::post('extras', [Step::class, 'save']);
