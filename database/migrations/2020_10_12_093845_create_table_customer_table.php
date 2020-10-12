<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("tenchuhan");
            $table->string("tenphienam");
            $table->string("male");
            $table->string("sinhnhat");
            $table->string("thanhphangiadinh");
            $table->string("diachinha");
            $table->string("sodienthoaicodinh");
            $table->string("sodienthoaididong");
            $table->string("matkhau");
            $table->string("email");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('linkweb');
            $table->string('truso');
            $table->string('sdtcty');
            $table->string('songuoilam');
            $table->string('chucvu');
            $table->string('namcongtac');
            $table->string('thoigianlamviec');
            $table->string('thoigiannghi');
            $table->string('nguoibaolanh');
            $table->string('diachinguoibaolanh');
            $table->string('sdtnguoibaolanh');
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
        Schema::dropIfExists('customer');
    }
}
