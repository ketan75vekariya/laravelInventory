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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('upc');
            $table->string('ena');
            $table->string('isbn');
            $table->string('mpn');
            $table->string('hsn');
            $table->double('weight');
            $table->double('selling_price');
            $table->double('cost_price');
            $table->text('description');
            $table->double('opening_stock');
            $table->double('reorder_point');
            $table->timestamps();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
