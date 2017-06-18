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
        // Транислитератор
        $transliteration = new That0n3guy\Transliteration\Transliteration;

        DB::table('carousel')->insert(
            [
                [
                    'name' => 'belts',
                    'translit_name' => $transliteration->clean_filename('belts'),
                    'image' => 'belts-1-1200x750.jpg',
                    'title' => 'LEATHER BELTS FOR TWO CAMERAS — 200 EURO.
    INFO: UNLOADING LEATHER BELTS FOR TWO CAMERAS (TOTAL WEIGHT 20 KG).
    WORLDWIDE DELIVERY!
    LIMITED EDITION!
    MORE INFORMATION — SERIV@UKR.NET',
                    'description' => '',
                    'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [

                    'name' => 'WORKSHOP POCKET',
                    'translit_name' => $transliteration->clean_filename('WORKSHOP POCKET'),
                    'image' => 'workshop-pocket-1200x750.jpg',
                    'title' => 'WORKSHOP POCKET
    (Part N1. Published in english. Digital version.)',
                    'description' => '',
                    'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [

                    'name' => 'TEXTURES',
                    'translit_name' => $transliteration->clean_filename('TEXTURES'),
                    'image' => 'textures',
                    'title' => 'IN THIS COLLECTION YOU CAN FIND MY BEST TEXTURES FOR BEST VISUAL EFFECTS
IN YOUR CREATIVE PHOTOGRAPHY.',
                    'description' => '50 TEXTURES + BONUS 10 TEXTURES — 50 EURO
    After receiving the money, i will send the textures to your e-mail.
    You can send the money by Money Transfer System «WESTERN UNION»
    («WESTERN UNION» is a money transfer system it is safe and comfortable.
    you need to go to the bank , the «WESTERN UNION» system is wide spread and you can find it in any bank)
    (my data only: Ivanov Sergey, Ukraine, Kiev, Shumskogo 5, 255. tel: +380632680883)
    Please to inform me that you have sent the money. Please send me the screenshot the code «WESTERN UNION»',
                    'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
