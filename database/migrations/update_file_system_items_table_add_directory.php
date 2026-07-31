<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Adapters scope every query to a directory string, so the column has to exist
 * for any of them to work. Applications that added it on their own before this
 * migration shipped are left alone.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('file_system_items', 'directory')) {
            return;
        }

        Schema::table('file_system_items', function (Blueprint $table) {
            $table->string('directory')->nullable()->after('parent_id')->index();
        });
    }

    public function down(): void
    {
        if (! Schema::hasColumn('file_system_items', 'directory')) {
            return;
        }

        Schema::table('file_system_items', function (Blueprint $table) {
            $table->dropColumn('directory');
        });
    }
};
