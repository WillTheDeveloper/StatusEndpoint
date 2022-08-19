<?php

use App\Http\Controllers\Status;
use Illuminate\Support\Facades\Route;

Route::get('/status', [Status::class, 'status'])->middleware('web')->name('status');
