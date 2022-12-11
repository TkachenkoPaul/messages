<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\MessageTypeController;
use App\Http\Controllers\StatusTypeController;
use App\Http\Controllers\UserReportController;
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
Route::middleware('auth')->group(function () {
    Route::get('/',[MessagesController::class,'index'])->name('messages.index');
    Route::get('/messages/list',[MessagesController::class,'datatables'])->name('messages.list');
    Route::get('/message/{id}/',[MessagesController::class,'show'])->name('messages.show');
    Route::post('/message/{id}/',[MessagesController::class,'update'])->name('messages.update');
    Route::get('/messages/add',[MessagesController::class,'create'])->name('messages.create');
    Route::post('/messages/add',[MessagesController::class,'store'])->name('messages.store');

    Route::get('/users/report/',[UserReportController::class,'index'])->name('user-report.index');

    Route::get('/types',[MessageTypeController::class,'index'])->name('types.index');
    Route::get('/types/list',[MessageTypeController::class,'datatables'])->name('types.list');

    Route::get('/status',[StatusTypeController::class,'index'])->name('status.index');
    Route::get('/status/list',[StatusTypeController::class,'datatables'])->name('status.list');
});

require __DIR__.'/auth.php';
