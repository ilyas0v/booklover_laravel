<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('authors')->insert(
            array(
                array(
                    'full_name' => 'William Shakespeare',
                    'date_of_birth' =>'1564-04-26',
                    'date_of_death' =>'1616-04-23',
                    'birth_place' => 'Stratford-upon-Avon, Warwickshire, England',
                    'info' =>'<p>His father William was a successful local businessman, and his mother Mary was the daughter of a landowner. Relatively prosperous, it is likely the family paid for Williams education, although there is no evidence he attended university.</p>  <p>In 1582 William, aged only 18, married an older woman named Anne Hathaway. They had three children, Susanna, Hamnet and Juliet. Their only son Hamnet died aged just 11.  <p>After his marriage, information about the life of Shakespeare is sketchy, but it seems he spent most of his time in London – writing and acting in his plays.  <p>Due to some well-timed investments, Shakespeare was able to secure a firm financial background, leaving time for writing and acting. The best of these investments was buying some real estate near Stratford in 1605, which soon doubled in value.  <p>It seemed Shakespeare didn’t mind being absent from his family – he only returned home during Lent when all the theatres were closed. It is thought that during the 1590s he wrote the majority of his sonnets. This was a time of prolific writing and his plays developed a good deal of interest and controversy. His early plays were mainly comedies (e.g. Much Ado about Nothing, A Midsummer’s Night Dream) and histories (e.g. Henry V)  <p>By the early Seventeenth Century, Shakespeare had begun to write plays in the genre of tragedy. These plays, such as Hamlet, Othello and King Lear, often hinge on some fatal error or flaw in the lead character and provide fascinating insights into the darker aspects of human nature. These later plays are considered Shakespeare’s finest achievements.',
                ),
                array(
                    'full_name' => 'J.K. Rowling',
                    'date_of_birth' =>'1965-07-31',
                    'date_of_death' =>null,
                    'birth_place' => 'Yate, Gloucestershire, England',
                    'info' =>'The Children\'s Authors series gives young readers an intimate look at the lives of their favorite writers. Each engaging biography traces an author\'s childhood, education, and career. Readers will learn what inspired the authors to write and how they came up with story ideas. Clearly-written text and amusing anecdotes provide readers with easy access to the lives of these beloved authors.',
                ),
                array(
                    'full_name' => 'Henry Ernest Dudeney',
                    'date_of_birth' =>'1857-04-10',
                    'date_of_death' =>'1930-04-23',
                    'birth_place' => 'Mayfield, East Sussex, England',
                    'info' =>'Henry Ernest Dudeney was an English author and mathematician who specialised in logic puzzles and mathematical games. He is known as one of the country\'s foremost creators of mathematical puzzles',
                )
            )
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
