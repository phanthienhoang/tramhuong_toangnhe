<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->unsignedBigInteger('orderNumberId');
            $table->unsignedBigInteger('productCodeId');
            $table->integer('quantityOrdered');
            $table->decimal('priceEach');
            $table->timestamps();
            $table->primary(['orderNumberId','productCodeId']);
            $table->foreign('orderNumberId')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('productCodeId')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}
