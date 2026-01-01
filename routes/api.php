<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\BangkuController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\TicketController;
use App\Models\Bangku;

// use App\Http\Controllers\Api\MovieController;
// use App\Http\Controllers\Api\ScheduleController;
// use App\Http\Controllers\Api\SeatController;
// use App\Http\Controllers\Api\BookingController;
// use App\Http\Controllers\Api\PaymentController;

Route::prefix('v1')->group(function () {

    // Auth
    Route::get('/bangku-store', [BangkuController::class, 'index']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    
    // // Public
    Route::get('/film', [FilmController::class, 'index']);
    Route::get('/film/{film}', [FilmController::class, 'show']);

    Route::post('/ticket/store', [TicketController::class, 'store']);
    // Route::get('/schedules/{movie_id}', [ScheduleController::class, 'byMovie']);
    // Route::get('/seats/{schedule_id}', [SeatController::class, 'bySchedule']);

    // // Protected
    // Route::middleware('auth:sanctum')->group(function () {
    //     Route::post('/booking', [BookingController::class, 'store']);
    //     Route::get('/booking/{id}', [BookingController::class, 'show']);
    //     Route::get('/my-bookings', [BookingController::class, 'myBookings']);

    //     Route::post('/payment', [PaymentController::class, 'pay']);
    // });

});
