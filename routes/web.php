<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrondissementController;

Route::get('/arrondissements', [ArrondissementController::class, 'index']);