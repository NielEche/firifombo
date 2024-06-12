<?php

use App\Http\Controllers\AdminWritingController;
use App\Http\Controllers\AdminAudioController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/adminWriting', [AdminWritingController::class, 'index'])->name('admin.writing');
    Route::post('/writing', [AdminWritingController::class, 'store'])->name('writing.store');
    Route::get('/writing/{id}',  [AdminWritingController::class, 'edit'])->name('writing.edit');
    Route::patch('/writings/{id}', [AdminWritingController::class, 'update'])->name('writings.update');
    Route::delete('/writing/{id}', [AdminWritingController::class, 'destroy'])->name('writing.destroy');

    Route::get('/adminAudio', [AdminAudioController::class, 'index'])->name('admin.audio');
    Route::post('/audio', [AdminAudioController::class, 'store'])->name('audio.store');
    Route::get('/audio/{id}',  [AdminAudioController::class, 'edit'])->name('audio.edit');
    Route::patch('/audios/{id}', [AdminAudioController::class, 'update'])->name('audios.update');
    Route::delete('/audio/{id}', [AdminAudioController::class, 'destroy'])->name('audio.destroy');
});
