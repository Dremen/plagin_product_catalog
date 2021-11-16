<?php namespace Sydonios\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsPack extends Migration
{
    public function up()
    {
        Schema::table('sydonios_product_product', function ($table) {
            $table->string('product_pack')->nullable();
            $table->boolean('is_in_stock')->default(true);
        });
    }

    public function down()
    {
        Schema::table('sydonios_product_product', function ($table) {
            $table->string('product_pack')->nullable();
            $table->dropColumn('is_in_stock');
        });
    }
}
