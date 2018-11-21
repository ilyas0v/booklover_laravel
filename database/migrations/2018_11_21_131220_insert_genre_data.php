<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertGenreData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('genres')->insert(array(
                array(
                    'name' => 'Tragedy'
                ),
                array(
                    'name' => 'Science fiction'
                ),
                array(
                    'name' => 'Fantasy'
                ),
                array(
                    'name' => 'Mythology'
                ),
                array(
                    'name' => 'Adventure'
                ),
                array(
                    'name' => 'Mystery'
                ),
                array(
                    'name' => 'Drama'
                ),
                array(
                    'name' => 'Romance'
                ),
                array(
                    'name' => 'Action / Adventure'
                ),
                array(
                    'name' => 'Action thriller'
                ),
                array(
                    'name' => 'Satire'
                ),
                array(
                    'name' => 'Horror'
                ),
                array(
                    'name' => 'Tragic comedy'
                ),
                array(
                    'name' => 'Young adult fiction'
                ),
                array(
                    'name' => 'Dystopia'
                ))
        );
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
