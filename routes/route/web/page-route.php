<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Page\PageController::class)->group(function (){
    Route::get("/", "home")->name("home");
    Route::get("/hotels", "hotels")->name("hotels");
    Route::get("/hotel_single", "hotel_single")->name("hotel_single");
    Route::get("/tours", "tours")->name("tours");
    Route::get("/tour_single", "tour_single")->name("tour_single");
});
