<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_tag', function (Blueprint $table) {

            //$table->unsignedBigInteger('fact_id');
            //$table->unsignedBigInteger('tag_id');

            //$table->foreign('fact_id')->references('id')->on('facts');
            //$table->foreign('tag_id')->references('id')->on('tags');

            $table->foreignId('fact_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('tag_id')
            ->constrained()
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fact_tag');
    }
}
