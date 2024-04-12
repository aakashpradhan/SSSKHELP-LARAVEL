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
        Schema::table('users', function (Blueprint $table) {
            $table->string('country')->nullable();
            $table->string('contact')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('tehsil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('contact');
            $table->dropColumn('dob');
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropColumn('blood_group');
            $table->dropColumn('address');
            $table->dropColumn('state');
            $table->dropColumn('district');
            $table->dropColumn('tehsil');
        });
    }
};
