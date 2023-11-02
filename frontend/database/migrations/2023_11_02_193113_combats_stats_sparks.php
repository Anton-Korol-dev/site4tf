<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('combats_stats', function (Blueprint $table) {
            $table->renameColumn('value', 's2');
            $table->string('s3')->nullable();
            $table->string('s4')->nullable();
            $table->string('s5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('combats_stats', function (Blueprint $table) {
            $table->renameColumn('s2', 'value');
            $table->dropColumn('s3');
            $table->dropColumn('s4');
            $table->dropColumn('s5');
        });
    }
};
