<?php

namespace App\Service\Page;

class PageService
{
    public function home(){
        return view("page.home");
    }

    public function hotels(){
        return view("page.hotel.index");
    }

    public function hotel_single(){
        return view("page.hotel.single");
    }

    public function tours(){
        return view("page.tour.index");
    }

    public function tour_single(){
        return view("page.tour.single");
    }
}
