<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('combats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('capability');
            $table->enum('fraction', ['autobot', 'decepticon']);
            $table->string('char_name');
            // $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('combats');
    }
};
