<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert(
            [
                [
                    'img_name' => '6b.jpg',
                     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'img_name'=> '7.jpg',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],


            ]);
    }
}
