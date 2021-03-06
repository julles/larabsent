<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('position');
            
            $table->timestamps();
        
        });

        \DB::table('positions')->insert([['id' => '1' , 'position' => 'Manager'] , ['id' => '2' , 'position' => 'Accounting']]);
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('positions');
    }
}
