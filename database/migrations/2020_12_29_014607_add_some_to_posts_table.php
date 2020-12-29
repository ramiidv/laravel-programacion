<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('titulo');
            $table->integer("anio");
            $table->integer("iddirector");
            $table->integer("genero");
            $table->string("imagen");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn("titulo");
            $table->dropColumn("anio");
            $table->dropColumn("iddirector");
            $table->dropColumn("genero");
            $table->dropColumn("imagen");
        });
    }
}
