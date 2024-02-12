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
        Schema::table('log_accesses', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->after('id');
            $table->unsignedBigInteger('id_level')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('logaccess', function (Blueprint $table) {
            //
        });
    }
};
