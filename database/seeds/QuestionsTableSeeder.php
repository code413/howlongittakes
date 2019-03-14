<?php

use Illuminate\Database\Seeder;

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
                    'content' => 'get to mars',
                    'slug' => str_slug('get to mars', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'digest food',
                    'slug' => str_slug('digest food', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'get to the moon',
                    'slug' => str_slug('get to the moon', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'boil eggs',
                    'slug' => str_slug('boil eggs', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
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
                ],
                [
                    'content' => 'get into ketosis',
                    'slug' => str_slug('get into ketosis', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'cook a 25lb (pound) turkey',
                    'slug' => str_slug('cook a 25lb (pound) turkey', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'charge airpods',
                    'slug' => str_slug('charge airpods', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'charge a juul',
                    'slug' => str_slug('charge a juul', '-'),
                    'approved' => true,
                    'aggregation' => 'average'
                ],
                [
                    'content' => 'get waves',
                    'slug' => str_slug('get waves', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
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
                ],
                [
                    'content' => 'get pregnant',
                    'slug' => str_slug('get pregnant', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'boil potatoes',
                    'slug' => str_slug('boil potatoes', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'walk a mile',
                    'slug' => str_slug('walk a mile', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],
                [
                    'content' => 'tattoo to heal',
                    'slug' => str_slug('tattoo to heal', '-'),
                    'approved' => true,
                    'aggregation' => 'range'
                ],

            ]);


    }
}
