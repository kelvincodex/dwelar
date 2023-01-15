<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CoreController;
use App\Service\Page\PageService;

class PageController extends CoreController
{
    public function __construct(protected PageService $pageService){
        parent::__construct();
    }

    public function home(){
        return $this->pageService->home();
    }

    public function hotels(){
        return $this->pageService->hotels();
    }

    public function hotel_single(){
        return $this->pageService->hotel_single();
    }

    public function tours(){
        return $this->pageService->tours();
    }

    public function tour_single(){
        return $this->pageService->tour_single();
    }

}
