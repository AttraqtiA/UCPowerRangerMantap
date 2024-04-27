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
        Schema::create('garbage_transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('garbage_id')->index();
            $table->foreign('garbage_id')->references('id')->on('garbages')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('garbageTransaction_id')->index();
            $table->foreign('garbageTransaction_id')->references('id')->on('garbage_transactions')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity')->nullable(false);
            $table->integer('point')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garbage_transaction_details');
    }
};