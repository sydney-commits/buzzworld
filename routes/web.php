<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'homepage']);




Route::get('test', function() {

    return view('homepage.layout');
});


