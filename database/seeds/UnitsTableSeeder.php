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
            "Century",
            "Day",
            "Decade",
            "Hour",
            "Minute",
            "Month",
            "Season",
            "Second",
            "Semester",
            "Solar cycle",
            "Year",
            "Week",
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
