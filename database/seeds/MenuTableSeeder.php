<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('menu')->insert(
            [
                ['menu_element' => 'MAIN MENU'],
                ['menu_element' => 'PORTFOLIO'],
                ['menu_element' => 'WEDDINGS'],
                ['menu_element' => 'LOVE STORY'],
                ['menu_element' => 'PICTURES'],
                ['menu_element' => 'VIDEO'],
                ['menu_element' => 'WORKSHOP PROGRAM'],
                ['menu_element' => 'CONTACTS'],
            ]
        );
    }
}
