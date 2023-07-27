<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
             Schema::create('employee', function (Blueprint$table){
            $table->id();
            $table->string('emp_name');
            $table->date('emp_dob');
            $table->int('emp_mobile');
            $table->str('emp_degree');
            $table->string('deg_classification');
            $table->foreign('emp_id')->reference('id');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
