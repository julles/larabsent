<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('position_id')->unsigned();

            $table->foreign('position_id')->references('id')->on('positions')->onDelete('restrict')->onUpdate('cascade');

            $table->string('nip' ,15);

            $table->string('name' , 225);
            
            $table->enum('gender' , ['p' ,'w']);

            $table->string('phone' , 15);

            $table->string('email' , 100);

            $table->string('photo' , 100);

            $table->timestamps();


            });


            \DB::table('employees')->insert([

                'name' => 'Muhamad Reza',
                'position_id' => 1,
                'nip' => '10902368',
                'gender' => 'p',
                'email' => 'reza.wikrama3@gmail.com',
             ]);

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
