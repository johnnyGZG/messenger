<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Llaves foraneas tabla user
            $table->unsignedBigInteger('from_id');
            $table->foreign('from_id')->references('id')->on('users');

            // Llaves foraneas tabla user
            $table->unsignedBigInteger('to_id');
            $table->foreign('to_id')->references('id')->on('users');

            // contant
            $table->text('content');
            
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
        Schema::dropIfExists('messages');
    }
}
