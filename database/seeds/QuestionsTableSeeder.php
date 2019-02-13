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
        $questions = [
            'boil an egg.',
            'get to the Mars.',
            'be a pilot.',
            'learn to swim.',
            'digest food.',
            'get abs.',
            'renew IC.',
            'adopt a child.',
            'charge iphone x.',
            'defrost chicken.',
            'establish credit.',
            'freeze water.',
            'form a habit.',
            'hear back from an interview.',
            'learn a foreign language.',
            'lose weight.',
            'mine a bitcoin.',
            'open a bank account.',
            'orbit the sun.',
            'quit smoking.',
            'study psychology.',
            'transfer money.',
            'update windows.',
            'walk the great wall of china.',
            'zip a file.',
        ];
        foreach ($questions as $question) {
            DB::table('questions')->insert([
                [
                    'content' => $question,
                    'slug' => str_slug($question, '-'),
                    'approved' => true
                ]
            ]);
        }

    }
}
