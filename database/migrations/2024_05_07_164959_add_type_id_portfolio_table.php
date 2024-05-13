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
        Schema::table('portfolio', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->after('image_path');
            $table->foreign('type_id')->references('id')->on('portfolio_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio', function (Blueprint $table) {
            $table->dropColumn('type_id');
        });
    }
};
