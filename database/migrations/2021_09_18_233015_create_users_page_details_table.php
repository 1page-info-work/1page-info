<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_page_details', function (Blueprint $table) {
            $table->id();
            $table->integer("users_id")->comment("users");
            $table->string("page_title")->nullable();
            $table->string("user_page_name")->nullable();
            $table->tinyInteger("user_page_color")->comment("users_page_pricing");
            $table->string("user_page_img")->nullable();
            $table->string("user_page_type")->nullable();
            $table->string("use_page_short_info")->nullable();
            $table->string("use_page_pdf")->nullable();
            $table->string("use_page_email")->nullable();
            $table->string("use_page_contact")->nullable();
            $table->string("use_page_location")->nullable();
            $table->tinyInteger("status");
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
        // Schema::dropIfExists('users_page_details');
    }
}
