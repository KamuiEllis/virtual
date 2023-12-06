<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
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
            $table->string('sku');
            $table->string('shortDescription');
            $table->longText('description');
            $table->integer('quantity');
            $table->decimal('cost');
            $table->string('deal')->default('');
            $table->decimal('discountCost')->default(0);
            $table->string('type');
            $table->decimal('timesBought')->default(0);
            $table->string('subcategory');
            $table->string('unboxing');
            $table->string('partNumber')->nullable();
            $table->string('productType');
            $table->string('brand');
            $table->string('colors');
            $table->string('image')->nullable();
            $table->decimal('weight');
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
};
