<?php
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\CategoriesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class, 'index'])->name('index');
    Route::resource('/categories',CategoriesController::class);
    Route::resource('/barber',BarberController::class);
    Route::resource('/reservation',ReservationController::class);
});

require __DIR__.'/auth.php';
