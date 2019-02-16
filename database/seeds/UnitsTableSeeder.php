<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            "century",
            "day",
            "decade",
            "hour",
            "minute",
            "month",
            "season",
            "second",
            "semester",
            "solar cycle",
            "year",
            "week",
        ];

        foreach ($units as $unit){
            DB::table('units')->insert([
                [
                   'name'=>$unit
                ]
            ]);
        }

    }
}
