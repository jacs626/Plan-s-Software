<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('slug');
            $table->text('description');
            $table->string('extract');
            $table->integer('price');
            $table->string('image',300);
            $table->boolean('visible');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                    ->references("id")
                    ->on("categories")
                    ->onDelete("cascade");
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
        Schema::dropIfExists('productos');
    }
}
