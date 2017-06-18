<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GallerieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transliteraon = new That0n3guy\Transliteration\Transliteration;
        DB::table('galleries')->insert(
            [
                [
                    'name' => 'TARAS+IVANNA (KIEV)',
                    'translite_name' => $transliteraon->clean_filename('TARAS+IVANNA (KIEV)'),
                    'major_img' => '06.jpg',
                    'category' => 'Wedding',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'NAZARIY+ALENA (LVIV)',
                    'translite_name' => $transliteraon->clean_filename('NAZARIY+ALENA (LVIV)'),
                    'major_img' => '23.jpg',
                    'category' => 'Wedding',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'BORIS+ANASTASIIA (ST.PETERSBURG)',
                    'translite_name' => $transliteraon->clean_filename('BORIS+ANASTASIIA (ST.PETERSBURG)'),
                    'major_img' => '40.jpg',
                    'category' => 'Love Story',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'RUSS+BELLA (PARIS)',
                    'translite_name' => $transliteraon->clean_filename('RUSS+BELLA (PARIS)'),
                    'major_img' => '23.jpg',
                    'category' => 'Love Story',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'PORTRAITS',
                    'translite_name' => $transliteraon->clean_filename('PORTRAITS'),
                    'major_img' => 'inetBranKatya03.jpg',
                    'category' => 'Portraits',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'FAMILY PICTURES',
                    'translite_name' => $transliteraon->clean_filename('FAMILY PICTURES'),
                    'major_img' => 'inet1D4_7876aa.jpg',
                    'category' => 'Family pictures',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'ANIMALS',
                    'translite_name' => $transliteraon->clean_filename('ANIMALS'),
                    'major_img' => 'petsBrasil.jpg',
                    'category' => 'Animals',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'VARIOUS PICTURES',
                    'translite_name' => $transliteraon->clean_filename('VARIOUS PICTURES'),
                    'major_img' => '1D4_9320.jpg',
                    'category' => 'Various',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'ART NUDE',
                    'translite_name' => $transliteraon->clean_filename('ART NUDE'),
                    'major_img' => '1fBGonUWZ4o.jpg',
                    'category' => 'Art Nude',
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ],


            ]
        );
    }
}
