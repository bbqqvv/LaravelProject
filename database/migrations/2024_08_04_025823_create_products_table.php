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
            // Tạo cột id với kiểu dữ liệu string, bạn có thể chọn kiểu khác như UUID nếu muốn
            $table->string('id')->primary();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('warranty_policy')->nullable();
            $table->string('colors')->nullable();
            $table->string('sizes')->nullable();
            $table->string('status');
            $table->decimal('cost_origin', 8, 2)->nullable();
            $table->decimal('sale', 8, 2)->nullable();
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('category_id')->nullable(); // Cột khóa ngoại, có thể NULL
            $table->json('images')->nullable(); // Lưu trữ hình ảnh dưới dạng JSON
            $table->integer('stock')->default(0);
            $table->string('slug');
            $table->timestamps();

            // Đặt khóa ngoại cho cột category_id
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
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
