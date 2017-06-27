<?php

namespace App\Http\Controllers;

use App\Repository\GalleriesRepository;
use Illuminate\Http\Request;
use App\Repository\Menu;
use App\Repository\Footer;
class SiteController extends Controller
{
    protected $template;
    protected $menu;
    protected $footer;
    protected $content;
    protected $array = array('menu' => array(),'content' => array(),'footer' => array());
    public function __construct(Menu $menu, Footer  $footer) {

        $this->menu = $menu->getMenu();
        $this->footer = $footer->getFooter();

    }

    /*
     *
     *  Это функция которая будет рендерить вывод и использовать Memcached для вьюх
     *
     */
    protected function renderOutput() {

        !isset($this->content) ?: array_push($this->array['content'],$this->content);
        !isset($this->menu) ?: $this->array['menu'] = $this->menu;
        !isset($this->footer) ?: $this->array['footer'] = $this->footer;

        return view($this->template)->with($this->array);

    }
}
