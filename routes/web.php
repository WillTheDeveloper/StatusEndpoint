<?php

use App\Http\Controllers\Status;
use Illuminate\Support\Facades\Route;

Route::domain('{site}.localhost')->group(function () {
    Route::get('/', [Status::class, 'get'])->middleware('web')->name('status');
});
