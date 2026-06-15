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
        Schema::table('dragao', function (Blueprint $table) {
            $table->unsignedBigInteger( "caverna_id" )->nullable();
            $table->foreign("caverna_id" )->references("id")->on("caverna");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
