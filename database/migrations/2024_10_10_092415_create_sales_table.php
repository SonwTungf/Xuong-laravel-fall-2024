<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up()
    // {

    //     Schema::create('sales', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('product_id')
    //             ->constrained('products')
    //             ->onDelete('cascade');
    //         $table->integer('quantity');
    //         $table->decimal('price', 15, 2);
    //         $table->decimal('tax', 15, 2);
    //         $table->decimal('total', 15, 2);
    //         $table->date('sale_date');
    //         $table->timestamps();
    //     });
    // }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
