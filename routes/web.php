<?php

use App\Http\Controllers\EPrescriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [EPrescriptionController::class, 'form']);
