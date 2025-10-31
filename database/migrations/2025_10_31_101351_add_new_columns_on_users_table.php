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
            $table->integer('role_id')->after('remember_token');
            $table->text('session_key')->after('password')->nullable();
            $table->dateTime('logged_out_at')->after('session_key')->nullable();
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
            $table->dropColumn('session_key');
            $table->dropColumn('logged_out_at');
            $table->dropColumn('deleted_at');
        });
    }
};
