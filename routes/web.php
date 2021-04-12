<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\UsersController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('administrators.index');
// })->name('dashboard');

Route::get('/', function () {
    return view('customers/home/index');
});
Route::get('/pricelist', function () {
    return view('customers/pricelist/index');
});
Route::get('/about_us', function () {
    return view('customers/about_us/index');
});
Route::get('/faq', function () {
    return view('customers/faq/index');
});
Route::get('/article', function () {
    return view('customers/article/index');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('/dashboard', DashboardsController::class);
    // Articles Controller

    Route::resource('/articles', ArticlesController::class);

    // Menus Controller
    Route::resource('/menus', MenusController::class);
    Route::resource('/testi', TestimonialsController::class);
    Route::resource('/user', UsersController::class);
});
