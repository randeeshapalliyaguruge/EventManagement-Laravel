<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController as EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminReservationController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/dev', function(){

    return true;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin'
])
->prefix('admin')
->name('admin.')
->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/events', AdminEventController::class)->only([
        'index', 'create', 'edit', 'destroy'
    ]);

    Route::get('/categories', function () {
        return view('admin.category.index');
    })->name('category.index');

    Route::get('/reservations', [AdminReservationController::class, 'index'])->name('reservation.index');

    // Route::get('/users', function () {
    //     return view('admin.users.index');
    // })->name('user.index');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');

});

Route::get('events', [EventController::class, 'index'])
    ->name('event.index');

Route::get('event/{event}', [EventController::class, 'show'])
    ->name('event.show');

Route::get('reserve/{event}', [EventController::class, 'reservation'])
    ->middleware(['auth:sanctum', config('jetstream.auth_session')])
    ->name('event.reservation');

Route::get('/', HomeController::class)->name('home');
