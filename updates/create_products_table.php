<?php namespace Sydonios\Product\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('sydonios_product_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('product_name');
            $table->text('product_description');
            $table->boolean('product_status');
            $table->string('product_series');
            $table->float('product_ratio')->nullable();
            $table->unsignedInteger('product_height')->nullable();
            $table->unsignedInteger('product_weight')->nullable();
            $table->unsignedInteger('product_size')->nullable();
            $table->string('product_material');
            $table->string('product_maintenance');
            $table->unsignedInteger('product_price')->nullable();
            $table->string('note_title');
            $table->text('note_description');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sydonios_product_product');
    }
}
