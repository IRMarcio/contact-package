<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stinger\Contact\Http\ContactController\ContactController;

Route::group(['namespace' => 'Stinger\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@contact')->name('contact');
    Route::post('contact', 'ContactController@send');
    ContactController::class;
});
