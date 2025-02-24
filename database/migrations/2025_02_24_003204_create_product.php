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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('sku', 100);
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->integer('category_id');
            $table->timestamps();

            $table->foreign('categoty_id')->references('id')->on('category')
                 ->onUpdate('cascade')
                 ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
