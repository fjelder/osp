<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
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
    return view('home');
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/statut', function () {
    return view('pages/statut');
})->name('statut');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/admin', function (){
    return view('pages.admin');
})->name('admin')->middleware(['auth:sanctum', 'verified']);
Route::resources([
    'faq' => FaqController::class,
]);