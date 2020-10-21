<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("avatar");
            $table->string("Front");
            $table->string("idnhanhvien");
            $table->string("Back");
            $table->string("luong");
            $table->string("Biasotietkiem");
            $table->string("manypicture");
            $table->integer("customerid");
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
        Schema::dropIfExists('upload');
    }
}
