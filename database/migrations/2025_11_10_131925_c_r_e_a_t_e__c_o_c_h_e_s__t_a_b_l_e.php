<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('coches', function (Blueprint $table) {
            $table->bigIncrements('id') -> primary();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('year');
            $table->float('precio');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
