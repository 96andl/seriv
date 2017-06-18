<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('for_id',false,true);
            $table->integer('ref_id',false,true);
            $table->string('name',150);
            $table->string('email',150);
            $table->string('web_site',255);
            $table->text('description');
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
        Schema::dropIfExists('galleries_comments');
    }
}
