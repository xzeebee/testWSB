<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tab1', function (Blueprint $table) {
            
            $table->string('pole4');
            $table->string('pole5');
            $table->string('pole6');
          
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        $table->drop('pole4');
        $table->drop('pole5');
        $table->drop('pole6');
    }
}
