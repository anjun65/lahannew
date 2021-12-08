<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPupukDanSaranaLain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests', function (Blueprint $table) {

            $table->string('jumlah_benih')->after('jumlah_peralatan')->nullable();
            $table->string('jumlah_petroganik')->after('jumlah_peralatan')->nullable();
            $table->string('jumlah_phonska')->after('jumlah_peralatan')->nullable();
            $table->string('jumlah_urea')->after('jumlah_peralatan')->nullable();
            $table->string('jumlah_za')->after('jumlah_peralatan')->nullable();
            $table->string('jumlah_zk')->after('jumlah_peralatan')->nullable();
            $table->string('jumlah_kci')->after('jumlah_peralatan')->nullable();
            $table->string('benih_lain')->after('jumlah_peralatan')->nullable();
            $table->string('jumlah_lain')->after('jumlah_peralatan')->nullable();

            $table->boolean('pestisida')->after('jumlah_peralatan')->nullable();
            $table->boolean('herbisida')->after('jumlah_peralatan')->nullable();
            $table->boolean('fungisida')->after('jumlah_peralatan')->nullable();
            $table->boolean('plastik_barrier')->after('jumlah_peralatan')->nullable();
            $table->boolean('jaring_burung')->after('jumlah_peralatan')->nullable();
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
            
        });
    }
}
