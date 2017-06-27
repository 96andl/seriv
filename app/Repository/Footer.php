<?php
/**
 * Created by PhpStorm.
 * User: ANDR
 * Date: 19.06.2017
 * Time: 21:58
 */

namespace App\Repository;
use App\Contacts;
use App\ContactMobile;
class Footer
{
    public $elements_of_footer;
    public function getFooter() {
        $elements_of_footer['mobile'] = ContactMobile::all();
        $elements_of_footer['contactinfo'] = Contacts::all()->first();
        return $elements_of_footer;

    }
}