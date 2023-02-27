<?php

use App\Http\Controllers\MediaFileController;
use Illuminate\Support\Facades\Route;


Route::get('mediafiles', [MediaFileController::class, 'index']);
