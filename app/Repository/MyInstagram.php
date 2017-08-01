<?php
/**
 * Created by PhpStorm.
 * User: ANDR
 * Date: 17.07.2017
 * Time: 15:07
 */

namespace App\Repository;


class MyInstagram
{
    static function getMediaDataImg($str) {
        $CONTENT = json_decode(file_get_contents("https://www.instagram.com/$str/media/"));
        $imgObj = [];
        for($i = 0; $i< count($CONTENT->items); $i++) {

            $imgObj['smallImg'][] = $CONTENT->items[$i]->images->thumbnail->url;
            $imgObj['middleImg'][] = $CONTENT->items[$i]->images->low_resolution->url;
            $imgObj['bigImg'][] = $CONTENT->items[$i]->images->standard_resolution->url;

        }
        return $imgObj;
    }
}