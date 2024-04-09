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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('contact');
            $table->date('dob');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('blood_group');
            $table->text('address');
            $table->string('state');
            $table->string('district');
            $table->string('tehsil');
            $table->string('mobile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
