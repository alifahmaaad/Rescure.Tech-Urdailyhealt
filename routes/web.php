<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CustomerHomesController;
use App\Http\Controllers\FaqsController;

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

// Route::get('/', function () {
//     return view('customers/home/index');
// });
// Route::get('/pricelist', function () {
//     return view('customers/pricelist/index');
// });
// Route::get('/article', function () {
//     return view('customers/article/index');
// });
// Route::get('/faq', function () {
//     return view('customers/faq/index');
// });

Route::get('/', [CustomerHomesController::class, 'index']);
Route::get('/pricelist', [MenusController::class, 'pricelistcustomer']);
Route::get('/about_us', function () {
    return view('customers/about_us/index');
});
Route::get('/faq', [FaqsController::class, 'customerfaqindex']);
Route::get('/article', [ArticlesController::class, 'costumerindex']);
Route::get('/article/{id}', [ArticlesController::class, 'showarticle'])->name('article');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('/dashboard', DashboardsController::class);
    // Articles Controller

    Route::get('/articles/archive', [ArticlesController::class, 'archive']);
    Route::get('/articles/kill/{id}', [ArticlesController::class, 'kill']);
    Route::get('/articles/restore/{id}', [ArticlesController::class, 'restore']);
    Route::resource('/articles', ArticlesController::class);

    // Menus Controller
    Route::get('/menus/archive', [MenusController::class, 'archive']);
    Route::get('/menus/kill/{id}', [MenusController::class, 'kill']);
    Route::get('/menus/restore/{id}', [MenusController::class, 'restore']);
    Route::resource('/menus', MenusController::class);

    Route::get('/testi/archive', [TestimonialsController::class, 'archive']);
    Route::get('/testi/kill/{id}', [TestimonialsController::class, 'kill']);
    Route::get('/testi/restore/{id}', [TestimonialsController::class, 'restore']);
    Route::resource('/testi', TestimonialsController::class);

    Route::get('/faqs/restore/{id}', [FaqsController::class, 'restore']);
    Route::get('/faqs/kill/{id}', [FaqsController::class, 'kill']);
    Route::get('/faqs/archive', [FaqsController::class, 'archive']);
    Route::resource('/faqs', FaqsController::class);

    Route::get('/users/restore/{id}', [UsersController::class, 'restore']);
    Route::get('/users/kill/{id}', [UsersController::class, 'kill']);
    Route::get('/users/archive', [UsersController::class, 'archive']);
    Route::resource('/users', UsersController::class);
});
