<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class CoreController extends Controller
{
    public function __construct(){
        $routeName = Route::currentRouteName();
        View::share("routeName", $routeName);
    }
}
