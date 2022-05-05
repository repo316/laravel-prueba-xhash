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
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->integer('zip_code')->index('idx_zip_code');
            $table->string('locality',255);
            $table->bigInteger('fk_id_federal_entity')->index('idx_fk_id_federal_entity');
            $table->bigInteger('fk_id_municipalities')->index('idx_fk_id_municipalities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masters');
    }
};
