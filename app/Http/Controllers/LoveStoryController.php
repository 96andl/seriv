<?php

namespace App\Http\Controllers;
use App\Repository\Footer;
use App\Repository\Menu;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class LoveStoryController extends SiteController
{
    public function __construct(Menu $menu, Footer $footer)
    {
        parent::__construct($menu, $footer);
    }

    public function execute($identify) {
        $this->template = 'layouts.gallery';
        $imgFilgerFiles = [];
        $imgFiles =  Storage::disk('public')->allFiles('uploads/love-story/'.$identify);
        foreach ($imgFiles as $key => $item) {
            if(preg_match('/(\.jPg$|\.jpeg$)/is',$item)) {
                $imgFilgerFiles =  array_add($imgFilgerFiles, $key, $item);
            }
        }
        $this->content = $imgFilgerFiles;

        return $this->renderOutput();
    }
}
