<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Frontend\BarberController as FrontendBarberController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/catrgories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/barbers', [FrontendBarberController::class, 'index'])->name('barbers.index');

Route::get('/reservations/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/reservations/sstep-one', [FrontendReservationController::class, 'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reservations/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/reservations/step-two', [FrontendReservationController::class, 'storeStepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou', [PagesController::class, 'thankyou'])->name('thankyou');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/barber', BarberController::class);
    Route::resource('/reservation', ReservationController::class);
});

require __DIR__ . '/auth.php';
