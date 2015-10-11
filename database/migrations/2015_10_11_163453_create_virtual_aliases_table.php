<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirtualAliasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_aliases', function (Blueprint $table) {
            $table->increments('domain_id');
            $table->timestamps();
            $table->string('name');
            $table->string('source');
            $table->string('destination');
            $table->foreign('domain_id')->references('id')->on('virtual_domains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('virtual_aliases');
    }
}
