<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;




Route::group(['prefix' => 'offers'], function () {
    Route::get('/', [CrudController::class, 'getOffers']);
    Route::get('/create', [CrudController::class, 'createOffer']);
});