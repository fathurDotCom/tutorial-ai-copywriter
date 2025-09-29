<?php

use App\Http\Controllers\CopywriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CopywriterController::class, 'showForm']);
Route::post('/generate', [CopywriterController::class, 'generate']);