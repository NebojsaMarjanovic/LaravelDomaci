<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaTabeleGrads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grads',function (Blueprint $table){
            $table->renameColumn('brStanovnika','naseljenost');
        });
        Schema::table('grads', function (Blueprint $table) {
            //vidi se u phpmysql-u, deo structure
            $table->string('naziv', 50)->change();
        });
        Schema::table('grads',function (Blueprint $table){
            $table->string('valuta');
        });
//ovo je jos jedna opcija za migraciju gde u okviru up fje pozivamo da se proveri postojanje kolone
        // if(Schema::hasColumn('grads','opis')) {
        //     return 'Imamo sve informacije o gradu';
        //         }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('grads',function (Blueprint $table){
          $table->dropColumn('valuta');
        $table->renameColumn('naseljenost','brStanovnika');
        });
    }
}
