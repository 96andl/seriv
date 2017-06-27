<?php

namespace App\Http\Controllers;

use App\Gallerie;
use Illuminate\Http\Request;
use App\Repository\Menu;
use App\Repository\Footer;
use Illuminate\Support\Facades\Storage;


class WeddingsController extends SiteController
{
    public function __construct(Menu $menu, Footer $footer) {
        parent::__construct($menu, $footer);
    }
    public function execute($identify) {

        $this->template = 'layouts.gallery';

        $imgFiles =  Storage::disk('uploads')->allFiles('any');
        $this->content = $imgFiles;

        return $this->renderOutput();

    }
}
