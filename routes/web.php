<?php

use App\Http\Controllers\MessagesController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/messages',[MessagesController::class,'index'])->name('messages.index');
    Route::get('/messages/list',[MessagesController::class,'datatables'])->name('messages.list');
});

require __DIR__.'/auth.php';
