<?php

namespace App\Http\Controllers\Page\Dash;

use App\Http\Controllers\Controller;
use App\Service\Page\Dash\DashPageService;

class DashPageController extends Controller
{
    public function __construct(protected DashPageService $dashPageService)
    {

    }

    public function dashboard(){
        return $this->dashPageService->dashboard();
    }

    public function invest(){
        return $this->dashPageService->invest();
    }
}
