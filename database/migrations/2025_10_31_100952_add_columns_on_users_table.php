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
            $table->integer('contact_number')->after('email')->nullable();
            $table->text('middle_name')->after('name')->nullable();
            $table->text('last_name')->after('middle_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('contact_number');
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
        });
    }
};
