<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_customer', function (Blueprint $table) {
            $table->increments("id");
            $table->string('customer_name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('email_verified_at')->nullable();
            $table->unsignedSmallInteger("status")->default(0);
            $table->integer('phone_number')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string("avatar")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('_customer');
    }
}
