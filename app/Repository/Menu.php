<?php
/**
 * Created by PhpStorm.
 * User: ANDR
 * Date: 18.06.2017
 * Time: 20:42
 */

namespace App\Repository;
use App\Gallerie;
use App\Workshop;
use App\Menu as DBMENU;
use Illuminate\Support\Facades\Route;


class Menu
{
    public $elements_of_menu = array();

    public function getMenu() {
        foreach (DBMENU::all('menu_element') as $key => $item) {

            switch ($item->menu_element) {
                case 'WEDDINGS' : {
                        $wedelements = Gallerie::all(['id','name','translite_name','category'])
                            ->where('category','=','Wedding')
                            ->sortBy('id')->take(10);
                        $this->elements_of_menu['WEDDINGS'] = [];
                        foreach ($wedelements as $item) {
                            $this->elements_of_menu['WEDDINGS'][] =
                                ['name' => $item->name, 'translite_name' => $item->translite_name];

                        }

                } break;
                case 'LOVE STORY' : {
                         $love_story_elements = Gallerie::all(['id','name','translite_name','category'])->take(10)
                            ->where('category','=','Love Story')
                            ->sortBy('id')->take(10);
                    $this->elements_of_menu['LOVE STORY'] = [];
                         foreach ($love_story_elements as $item) {
                             array_push($this->elements_of_menu['LOVE STORY'],
                                 array('name' => $item->name, 'translite_name' => $item->translite_name));
                         }
                } break;
                case 'PICTURES' : {
                    $this->elements_of_menu['PICTURES'] = [];
                    array_push($this->elements_of_menu['PICTURES'], array('Portraits','Family pictures','Art nude','Animals','Various'));
                } break;
                default : {
                    array_push($this->elements_of_menu,$item->menu_element);
                }
            }

       }
       return $this->elements_of_menu;
    }
}