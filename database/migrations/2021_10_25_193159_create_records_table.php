<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * https://coderwall.com/p/o73fbq/creating-foreign-key-in-laravel-migrations
         */
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id', 'fk_patient_id')->references('id')->on('patients')->onUpdate('CASCADE')->onDelete('CASCADE');
            // can also implement $table->foreignId('patient_id')->constrained('patients'); instead of two above lines
            $table->integer('pressure');
            $table->timestamp('recorded_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('records', function (Blueprint $table) {
            $table->dropForeign('fk_patient_id');
            $table->dropColumn('patient_id');
        });
    }
}
