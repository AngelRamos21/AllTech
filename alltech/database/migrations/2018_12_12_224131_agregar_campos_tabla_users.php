<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCamposTablaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('users', function (Blueprint $table) {
              $table->string('userName')->unique();

         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('userName');


       });
     }
}
