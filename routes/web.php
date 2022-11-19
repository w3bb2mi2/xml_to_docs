<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ParserController;

Route::get('/index', [ParserController::class, "index"]);
