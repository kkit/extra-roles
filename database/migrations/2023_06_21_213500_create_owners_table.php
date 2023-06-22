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
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        // +
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('owner_id')->index();
            $table->foreign('owner_id')
                ->references('id')
                ->on('owners');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
        // +
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['owner_id']);
        });

    }
};
