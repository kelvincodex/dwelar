<?php

use App\Http\Controllers\Page\Dash\DashPageController;
use Illuminate\Support\Facades\Route;

Route::controller(DashPageController::class)->group(function (){
    Route::get("/dashboard", "dashboard")->name("dashboard");
    Route::get("/dashboard/invest", "invest")->name("invest");
});
