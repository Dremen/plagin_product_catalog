<?php namespace Sydonios\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSlugProduct extends Migration
{
    public function up()
    {
        Schema::table('sydonios_product_product', function ($table) {
            $table->string('slug')->nullable();
        });
    }

    public function down()
    {
        Schema::table('sydonios_product_product', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
