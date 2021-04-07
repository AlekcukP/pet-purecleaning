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


Route::get('/', [Step::class, 'basic'])
    ->name('basic');
Route::post('/', [Step::class, 'saveBasic']);

Route::get('personal', [Step::class, 'personal'])
    ->name('personal')
    ->middleware('session')
    ->middleware('page.status');
Route::post('personal', [Step::class, 'savePersonal']);

Route::get('home', [Step::class, 'home'])
    ->name('home')
    ->middleware('session')
    ->middleware('page.status');
Route::post('home', [Step::class, 'saveHome']);

Route::get('materials', [Step::class, 'materials'])
    ->name('materials')
    ->middleware('session')
    ->middleware('page.status');
Route::post('materials', [Step::class, 'saveMaterials']);

Route::get('extras', [Step::class, 'extras'])
    ->name('extras')
    ->middleware('session')
    ->middleware('page.status');
// Route::post('extras', [Step::class, 'save']);
