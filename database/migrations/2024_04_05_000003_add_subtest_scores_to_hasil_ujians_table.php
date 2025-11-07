<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasil_ujians', function (Blueprint $table) {
            $table->json('subtest_scores')->nullable()->after('hasil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasil_ujians', function (Blueprint $table) {
            $table->dropColumn('subtest_scores');
        });
    }
};
