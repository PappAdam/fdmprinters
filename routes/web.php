<?php

use App\Http\Controllers\PrinterController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/printers');
Route::resource('printers', PrinterController::class);
