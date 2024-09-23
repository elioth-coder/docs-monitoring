<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::prefix('documents')->group(function () {
    Route::controller(DocumentController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/search', 'search');
        Route::get('/print', 'print');
        Route::post('/', 'store');
        Route::get('/{id}', 'show');
        Route::get('/{id}/edit', 'edit');
        Route::get('/{id}/copy', 'copy');
        Route::patch('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
});
