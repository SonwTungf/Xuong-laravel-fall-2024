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
    //     Schema::create('financial_reports', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->integer('month');
    //         $table->integer('year');
    //         $table->decimal('total_sales', 10, 2);
    //         $table->decimal('total_expenses', 10, 2);
    //         $table->decimal('profit_before_tax', 10, 2);
    //         $table->decimal('tax_amount', 10, 2);
    //         $table->decimal('profit_after_tax', 10, 2);
    //         $table->timestamps();
    //     });
    // }

    public function down()
    {
        Schema::dropIfExists('financial_reports');
    }
};
