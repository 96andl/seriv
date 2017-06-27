<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('Skype',255);
            $table->string('email',255);
            $table->string('copyright',255);
            $table->string('instagram_link',2063);
            $table->string('vk_link',2063);
            $table->string('facebook_link',2063);
            $table->string('youtube_link',2063);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
