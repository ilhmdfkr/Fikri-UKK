<?php

use App\Http\Controllers\ProsesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('kalkulator.kalkulator1');
});
Route::resource('proses', ProsesController::class);
