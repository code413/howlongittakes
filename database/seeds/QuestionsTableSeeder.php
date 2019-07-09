<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('questions')->insert([
                [
                    'content' => 'to get to mars',
                    'slug' => str_slug('to get to mars', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'to digest food',
                    'slug' => str_slug('to digest food', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'to get to the moon',
                    'slug' => str_slug('to get to the moon', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'to boil eggs',
                    'slug' => str_slug('to boil eggs', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                /*[
                    'content' => 'let oil-based paint to dry',
                    'slug' => str_slug('let oil-based paint to dry', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'let latex paint to dry',
                    'slug' => str_slug('let latex paint to dry', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'antibiotics to work',
                    'slug' => str_slug('antibiotics to work', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],*/
                [
                    'content' => 'to get into ketosis',
                    'slug' => str_slug('to get into ketosis', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'to cook a 25lb (pound) turkey',
                    'slug' => str_slug('to cook a 25lb (pound) turkey', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'to charge airpods',
                    'slug' => str_slug('to charge airpods', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'to charge a juul',
                    'slug' => str_slug('to charge a juul', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'to get waves',
                    'slug' => str_slug('to get waves', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                /*[
                    'content' => 'plastic bottles to decompose',
                    'slug' => str_slug('plastic bottles to decompose', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'food poisoning to hit',
                    'slug' => str_slug('food poisoning to hit', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],*/
                [
                    'content' => 'to get pregnant',
                    'slug' => str_slug('to get pregnant', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'to boil potatoes',
                    'slug' => str_slug('to boil potatoes', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'to walk a mile',
                    'slug' => str_slug('to walk a mile', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                /*[
                    'content' => 'tattoo to heal',
                    'slug' => str_slug('tattoo to heal', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],*/

            ]);


    }
}
