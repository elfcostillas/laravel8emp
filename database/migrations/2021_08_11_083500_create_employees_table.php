<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('id_no');
            $table->string('fname',64);
            $table->string('lname',64);
            $table->string('mname',64);
            $table->string('suffix',6);
            $table->date('birthdate',6);
            $table->string('contact_no',32);
            $table->string('email',128);
            $table->string('gender',128);
            $table->text('address_present',128);
            $table->text('address_permanent',128);

            $table->string('emergency_person',128);
            $table->string('emergency_no',128);
            $table->string('emergency_no',12);

            $table->string('img',64);

            $table->timestamps();

            //$table->foreign('seller_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
