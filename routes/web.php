<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;




Route::group(['prefix' => 'offers'], function () {
    Route::get('/', [CrudController::class, 'getOffers'])->name('listoffers');
    Route::get('/create', [CrudController::class, 'createOffer']);
    Route::post('/store', [CrudController::class, 'storeOffer'])->name('store');
});