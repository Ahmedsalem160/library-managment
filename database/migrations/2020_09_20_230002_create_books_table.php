<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('author');
            $table->text('description');
            $table->text('book_img');
            $table->text('book_file');
            $table->bigInteger('borrowed')->unsigned();
            $table->foreign('borrowed')->references('id')->on('users');
            //$table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('roof_id');
            //$table->foreign('roof_id')->references('id')->on('roofs');
            $table->foreignId('roof_id')->constrained('roofs');
            //$table->foreignId('user_id')->constrained();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('books');
    }
}
