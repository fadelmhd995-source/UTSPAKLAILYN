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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // Fields for API-style orders
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->json('items')->nullable();

            // Fields for web form (pesan layanan)
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->integer('area')->nullable();
            $table->text('notes')->nullable();
            $table->string('service')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
