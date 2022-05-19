<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\App;

Route::group(['prefix' => 'offers'], function () {
    Route::get('/', [CrudController::class, 'getOffers'])->name('listoffers');
    Route::get('/create', [CrudController::class, 'createOffer']);
    Route::post('/store', [CrudController::class, 'storeOffer'])->name('store');
});

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('welcome');
});