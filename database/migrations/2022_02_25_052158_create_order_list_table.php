<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_list', function (Blueprint $table) {
            $table->id();
            $table->Date('order_date')->nullable();
            $table->Integer('source')->nullable();
            $table->Integer('customer')->nullable();
            $table->string('bride_groom')->nullable();
            $table->Integer('status')->nullable();
            $table->Integer('order_type')->nullable();
            $table->string('refund')->nullable();
            $table->string('editor')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_list');
    }
};
