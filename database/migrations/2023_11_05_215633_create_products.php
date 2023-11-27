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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku')->unique();
            $table->string('shortDescription');
            $table->longText('description');
            $table->integer('quantity');
            $table->decimal('cost');
            $table->string('type');
            $table->string('productType');
            $table->json('cart')->nullable();
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
