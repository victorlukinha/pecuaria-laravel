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
        Schema::create('animals',function (Blueprint $table ){
            $table->id();
            $table->integer('donoId');
            $table->double('peso');
            $table->double('preco');
            $table->string('tagAnimal');
            $table->timestamps();


        }
        );
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
