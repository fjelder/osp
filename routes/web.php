<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsController;
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

Route::get('/walne-zebranie', function () {
    return view('walne');
})->name('walneZebranie');

Route::get('/szkolenia', function () {
    return view('szkolenia');
})->name('szkolenia');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/statut', function () {
    return view('pages/statut');
})->name('statut');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::resources([
    'faq' => FaqController::class,
]);


Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function (){
        return view('admin.dashboard');
    })->name('admin');
    Route::resources([
        'news' => NewsController::class,
    ]);
});