<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactMobilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_mobiles')->insert(
            [
                [
                    'Mobile' => '0988562102',
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                    ],
                [
                    'Mobile' => '0667439335',
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),

                ],
                [
                    'Mobile' => '09883219222',
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                ],
                [
                    'Mobile' => '0988562112',
                    'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                    'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                ],
            ]
        );
    }
}
