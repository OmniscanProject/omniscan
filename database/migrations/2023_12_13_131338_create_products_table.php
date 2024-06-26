<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->tinyInteger('active')->default('1');
            $table->string('description')->nullable();
            $table->string('stripe_product')->unique()->index();
            $table->string('image')->nullable();
            $table->string('sku')->nullable();
            $table->boolean('most_popular')->nullable();
            $table->jsonb('features')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}