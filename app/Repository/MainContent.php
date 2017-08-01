<?php
/**
 * Created by PhpStorm.
 * User: ANDR
 * Date: 04.07.2017
 * Time: 18:01
 */

namespace App\Repository;
use App\Slider;
use App\Carousel;
use App\Workshop;
use App\Repository\MyInstagram;


class MainContent
{
    public function getMainContent() {
        $content = null;
        $carousel = Carousel::get(['id','name','translit_name','image','title','description','created_at','updated_at']);

        $slider = Slider::all();
        $workshop = Workshop::all();
        $content['carousel'] = $carousel;
        $content['slider'] = $slider;
        $content['workshop'] = $workshop;
        $CONTENT = json_decode(file_get_contents("https://www.instagram.com/andriibashuk/media/"));

        $content['instagram_img'] = MyInstagram::getMediaDataImg('andriibashuk');

        return $content;
    }


}