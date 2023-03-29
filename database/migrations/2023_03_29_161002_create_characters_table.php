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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('speciality', ['Guerrier', 'Mage', 'Druide', 'Assassin', 'Berserker', 'Archer']);
            $table->unsignedTinyInteger('mag')->default(0);
            $table->unsignedTinyInteger('for')->default(0);
            $table->unsignedTinyInteger('agi')->default(0);
            $table->unsignedTinyInteger('int')->default(0);
            $table->unsignedTinyInteger('pv')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
