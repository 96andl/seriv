<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousel')->insert(
            [
                'name' => '',
                'translit_name' => '',
                'image' => '',
                'title' => '',
                'description' => '',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [

            ]
        );
    }
}
