<?php

use App\Livewire\Home;
use App\Livewire\Child\Shop;
use App\Livewire\Test\Counter;
use App\Livewire\Child\Article;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);
Route::get('/shop', Shop::class);
Route::get('/counter', Counter::class);
Route::get('/articles', Article::class);
