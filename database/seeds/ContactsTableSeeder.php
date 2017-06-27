<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                'Skype'  => 'andrey020596',
                'email' => '96andlgrac@gmail.com',
                'copyright' => 'Andrey Bashyk Photography',
                'instagram_link' => 'andriibashyk',
                'vk_link' => 'music_is_my_life',
                'facebook_link' => 'goboboy',
                'youtube_link' => 'linkie',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:m:s')
            ]
        );
    }
}
