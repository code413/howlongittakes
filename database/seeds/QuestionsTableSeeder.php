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
            'How long does it take to boil an egg?',
            'How long does it take to get to the Mars?',
            'How long does it take to be a pilot?',
            'How long does it take to learn to swim?',
            'How long does it take to digest food?',
            'How long does it take to get abs?',
            'How long does it take to renew IC?',
            'How long does it take to adopt a child?',
            'How long does it take to charge iphone x?',
            'How long does it take to defrost chicken?',
            'How long does it take to establish credit?',
            'How long does it take to freeze water?',
            'How long does it take to form a habit?',
            'How long does it take to hear back from an interview?',
            'How long does it take to learn a foreign language?',
            'How long does it take to lose weight?',
            'How long does it take to mine a bitcoin?',
            'How long does it take to open a bank account?',
            'How long does it take to orbit the sun?',
            'How long does it take to quit smoking?',
            'How long does it take to study psychology?',
            'How long does it take to transfer money?',
            'How long does it take to update windows?',
            'How long does it take to walk the great wall of china?',
            'How long does it take to zip a file?',
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
