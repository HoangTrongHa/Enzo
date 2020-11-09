<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {

            $table->bigIncrements("id");
            $table->string("kanji_name");
            $table->string("name_transliteration");
            $table->string("male");
            $table->string("birthday");
            $table->string("family_structure");
            $table->string("address");
            $table->string("landline_number");
            $table->string("phone_number");
            $table->string('password');
            $table->string("email");
            $table->integer("static")->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('linkweb');
            $table->string('company');
            $table->string('company_phone');
            $table->string('num_people');
            $table->string('position');
            $table->string('work_year');
            $table->string('work_time');
            $table->string('work_break');
            $table->string('protector');
            $table->string('guardian_address');
            $table->string('phone_number_guard');
            $table->double("maxtotal")->nullable();
            $table->string("borrowing")->nullable();
            $table->string("receive")->nullable();
            $table->date("payment_term")->nullable();
            $table->double("loancustomer")->default(0);
            $table->dateTime("checklogin")->nullable();
            $table->double("loancus")->nullable();
            $table->dateTime("registercus")->nullable();
            $table ->double("loanrefund")->nullable();
            $table->bigInteger("account_number")->nullable();
            $table->string("account_holder")->nullable();
            $table->string("account_type")->nullable();
            $table->string("name-bank")->nullable();

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
        Schema::table('customer', function (Blueprint $table) {
            Schema::dropIfExists('customer');
        });
    }
}
