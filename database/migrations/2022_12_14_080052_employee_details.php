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
        Schema::create('employeeDetails', function (Blueprint $table) {
            $table->id();
            $table->string('employeeFName',80);
            $table->string('employeeLName',80)->nullable();
            $table->string('employeeEmailId',100)->unique()->nullable();
            $table->string('employeeContactNo',20)->unique();
            $table->float('employeeSalary',15,2)->nullable();
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
        Schema::dropIfExists('employeeDetails');
    }
};
