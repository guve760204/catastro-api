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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->unsignedBigInteger('transaction_type_id')->nullable();
            $table->unsignedBigInteger('notary_id')->nullable();
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('attendant_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('transaction_status_id')->nullable();
            $table->text('description')->nullable();
            $table->string('location', 255)->nullable();
            $table->date('register_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('accepted_at')->nullable();
            $table->date('processed_at')->nullable();
            $table->date('rejected_at')->nullable();
            $table->date('canceled_at')->nullable();
            $table->string('name', 110)->nullable();
            $table->string('email')->nullable();
            $table->string('phone',25)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('lat', 25)->nullable();
            $table->string('lng', 25)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
