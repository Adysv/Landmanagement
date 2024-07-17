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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('DepartmentName');
            $table->timestamps();
        });

        DB::table('departments')->insert([
            ['DepartmentName' => 'Resettlement'],
            ['DepartmentName' => 'LIMS'],
            ['DepartmentName' => 'Estates'],
            ['DepartmentName' => 'HR'],
            ['DepartmentName' => 'Records'],
            ['DepartmentName' => 'Accounts'],
            ['DepartmentName' => 'PLO'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};