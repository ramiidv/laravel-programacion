<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeToActoresPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actores_posts', function (Blueprint $table) {
            $table->foreignId('idactor')->constrained('actores');
            $table->foreignId('idposts')->constrained('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actores_posts', function (Blueprint $table) {
            $table->dropColumn("idactor");
            $table->dropColumn("idposts");
        });
    }
}
