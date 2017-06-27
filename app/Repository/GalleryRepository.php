<?php

namespace App\Repository;
use App\Gallerie;
/**
 * Created by PhpStorm.
 * User: ANDR
 * Date: 18.06.2017
 * Time: 20:35
 */
class GalleriesRepository
{
    public function get() {
        return Gallerie::all();
    }
}