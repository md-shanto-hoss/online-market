<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('unit_id');
            $table->integer('brand_id');
            $table->string('name');
            $table->string('code');
            $table->integer('stoke_amount');
            $table->integer('regular_price');
            $table->integer('selling_price');
            $table->text('short_description');
            $table->longText('long_description');
            $table->text('image');
            $table->string('status')->default(1);
            $table->integer('hit_count')->nullable();
            $table->integer('sells_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
