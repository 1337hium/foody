<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixDb3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezepts', function ($table) {
            $table->string('z2')->nullable()->change();
            $table->string('z1')->nullable()->change();
            $table->string('z3')->nullable()->change();
            $table->string('z4')->nullable()->change();
            $table->string('z5')->nullable()->change();
            $table->string('z6')->nullable()->change();
            $table->string('z7')->nullable()->change();
            $table->string('z8')->nullable()->change();
            $table->string('z9')->nullable()->change();
            $table->string('z10')->nullable()->change();
            $table->string('z11')->nullable()->change();
            $table->string('z12')->nullable()->change();
            $table->string('z13')->nullable()->change();
            $table->string('z14')->nullable()->change();
            $table->string('z15')->nullable()->change();
            $table->string('z16')->nullable()->change();
            $table->string('z17')->nullable()->change();
            $table->string('z18')->nullable()->change();
            $table->string('z19')->nullable()->change();
            $table->string('z20')->nullable()->change();
            $table->string('z21')->nullable()->change();
            $table->string('category')->nullable()->change();
            $table->string('notes')->nullable()->change();
            $table->string('directions')->nullable()->change();
            $table->string('editor')->nullable()->change();        //
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
