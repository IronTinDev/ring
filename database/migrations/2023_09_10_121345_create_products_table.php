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
            $table->string("product_name")->unique();
            $table->string("product_image")->nullable();
            $table->string("product_description")->nullable();
            // $table->enum("product_him_model",["Silver","Platinum","Paladium"]);
            // $table->enum("product_her_model",["Silver","Platinum","Paladium"]);
            // $table->integer("product_him_weight");
            // $table->integer("product_her_weight");
            // $table->enum("product_stone",["Diamon","Sirkon","Stone"]);
            // $table->integer("product_him_size");
            // $table->integer("product_her_size");
            // $table->bigInteger("product_price");
            // $table->enum("product_gold",["24","21","18","17","16","9","8","6"]);
            // $table->enum("product_color",["White","Yellow","Red","Rose"]);
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
