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
        Schema::create('notaries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->smallInteger('number')->nullable();
            $table->string('location', 110)->nullable();
            $table->string('email')->nullable();
            $table->string('phone',25)->nullable();
            $table->string('address', 255)->nullable();
            $table->boolean('is_local')->default(true);
            $table->boolean('is_active')->default(true);
            $table->date('registration_date')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notaries');
    }
};
