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
            $table->string('type');
            $table->string('name');
            $table->string('size')->nullable();
            $table->json('gallery')->nullable();
            $table->string('brand')->nullable();
            $table->string('author')->nullable();
            $table->string('image')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('publisher')->nullable();
            $table->string('artist')->nullable();
            $table->string('media')->nullable();
            $table->float('price');
            $table->float('discount')->nullable();
            $table->unsignedInteger('quantity')->default(0);
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
