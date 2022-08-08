<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->comment('Описание продукта')->nullable();
            $table->string('slug')->comment('url для продукта')->nullable();
            $table->string('preview_image')->comment('Возвращать картинку')->nullable();
            $table->integer('position')->default(1000);
            $table->string('video')->comment('Ссылка на обзор продукта')->nullable();
            $table->boolean('novelty')->comment('Является ли игра новинкой; 1 - да, 0 - нет')->default(0);
            $table->integer('status')->comment('Статус продукта; 0 - продукт выключен, 10 - продукт везде отображается')->default(10);
            $table->integer('publisher_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
