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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('birthPlace')->required();
            $table->date('birthDate')->required();
            $table->string('address')->required();
            $table->string('workAddress')->required();
            $table->string('phone')->required();
            $table->string('ktp')->required();
            $table->string('kk')->required();
            $table->string('motherName')->required();
            $table->date('joinDate')->required();
            $table->string('active', 1)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
