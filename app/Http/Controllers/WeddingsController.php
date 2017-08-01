<?php

namespace App\Http\Controllers;

use App\Gallerie;
use Illuminate\Http\Request;
use App\Repository\Menu;
use App\Repository\Footer;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Directory;


class WeddingsController extends SiteController
{
    public function __construct(Menu $menu, Footer $footer) {
        parent::__construct($menu, $footer);
    }
    public function execute($identify) {

        $this->template = 'layouts.gallery';
        $imgFiles =  Storage::disk('public')->allFiles('uploads/weddings/'.$identify);
        $imgFilgerFiles = [];
        foreach ($imgFiles as $key => $item) {
            if(preg_match('/(\.jPg$|\.jpeg$)/is',$item)) {
                $imgFilgerFiles =  array_add($imgFilgerFiles, $key, $item);
            }
        }
        $this->content = $imgFilgerFiles;


        return $this->renderOutput();

    }
}
