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
        Schema::create('investments_rounds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('startup_id');
            $table->unsignedBigInteger('investor_id');
            $table->decimal('amount', 15, 2);
            $table->timestamps();

            $table->foreign('startup_id')->references('id')->on('startups')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments_rounds');
    }
};
