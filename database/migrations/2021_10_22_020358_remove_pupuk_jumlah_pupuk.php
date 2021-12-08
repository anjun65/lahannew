<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePupukJumlahPupuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->dropColumn('pupuk');
            $table->dropColumn('jumlah_pupuk');
            $table->dropColumn('sarana_lain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->string('pupuk');
            $table->string('jumlah_pupuk');
            $table->string('sarana_lain');
        });
    }
}
