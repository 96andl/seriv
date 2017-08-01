<?php

namespace App\Http\Controllers;

use App\Carousel;
use App\Gallerie;
use App\GallerieComment;
use App\Repository\Footer;
use App\Repository\MainContent;
use App\Slider;
use App\Workshop;
use Illuminate\Http\Request;
use App\Repository\Menu;

class IndexController extends SiteController
{
    protected $menu;

    public function __construct(Menu $menu, Footer $footer) {
        parent::__construct($menu, $footer);
    }

    public function execute() {

        $this->content = (new MainContent())->getMainContent();

        $this->template = 'layouts.main';

        return $this->renderOutput();
    }
}
