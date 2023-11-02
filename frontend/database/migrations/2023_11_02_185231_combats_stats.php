<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('combats_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('combat_id');
            $table->unsignedSmallInteger('level');
            $table->string('value')->nullable();
            // $table->timestamps();

            $table->foreign('combat_id')->references('id')->on('combats');
        });
    }

    public function down(): void
    {
        Schema::table('combats_stats', function (Blueprint $table) {
            $table->dropForeign(['combat_id']);
        });
        Schema::dropIfExists('combats_stats');
    }
};
