<?php

namespace App\Service\Page\Dash;

class DashPageService
{
    public function dashboard(){
        return view("dash.overview.index");
    }

    public function invest(){
        return view("dash.transaction.invest");
    }
}
