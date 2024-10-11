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
    //     Schema::create('taxes', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->string('tax_name', 100);
    //         $table->decimal('rate', 5, 2);
    //         $table->timestamps();
    //     });
    // }

    public function down()
    {
        Schema::dropIfExists('taxes');
    }
};
