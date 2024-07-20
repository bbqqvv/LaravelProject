<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->text('description')->nullable();
            $table->text('warranty_policy')->nullable();
            $table->string('status');
            $table->decimal('cost_origin', 8, 2);
            $table->decimal('cost_sale', 8, 2);
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('category_id');
            $table->string('image')->nullable();
            $table->integer('stock')->default(0);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
}
