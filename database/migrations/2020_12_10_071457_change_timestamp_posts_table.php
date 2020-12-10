<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTimestampPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('world', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement("ALTER TABLE `world` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP, CHANGE `updated_at` `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('world', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement("ALTER TABLE `world` CHANGE `created_at` `created_at` TIMESTAMP NULL, CHANGE `updated_at` `updated_at` TIMESTAMP NULL");
        });
    }
}
