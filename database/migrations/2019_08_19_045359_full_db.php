<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FullDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezepts', function ($table) {
            $table->string('z1');
            $table->string('z2');
            $table->string('z3');
            $table->string('z4');
            $table->string('z5');
            $table->string('z6');
            $table->string('z7');
            $table->string('z8');
            $table->string('z9');
            $table->string('z10');
            $table->string('z11');
            $table->string('z12');
            $table->string('z13');
            $table->string('z14');
            $table->string('z15');
            $table->string('z16');
            $table->string('z17');
            $table->string('z18');
            $table->string('z19');
            $table->string('z20');
            $table->string('z21');
            $table->string('category');
            $table->string('notes');
            $table->string('directions');
            $table->string('editor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
