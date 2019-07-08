<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(QuestionsTableSeeder::class);
         $this->call(UnitsTableSeeder::class);
         $this->call(AnswersTableSeeder::class);
         $this->call(UsersTableSeeder::class);

//         factory(\App\Answer::class , 50)->create();
    }
}
