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
            "Aeon",
            "Annus",
            "Atom (time)",
            "Banzai",
            "Biennial",
            "Billion years",
            "Biweekly",
            "Bya",
            "Calendar",
            "Calendar year",
            "Century",
            "Century leap year",
            "Chronology",
            "Chronon",
            "Chronozone",
            "Common year",
            "Cosmic Calendar",
            "Cosmological decade",
            "Date windowing",
            "Day",
            "Lunar day",
            "Decade",
            "Decimal time",
            "Eclipse season",
            "Eight-day week",
            "Epact",
            "Era",
            "Fiscal year",
            "Flick (time)",
            "Fortnight",
            "Friedman Unit",
            "Galactic year",
            "Gaussian year",
            "Geologic Calendar",
            "Global Boundary Stratotype Section and Point",
            "Global Standard Stratigraphic Age",
            "Half-month",
            "Helek",
            "Hindu units of time",
            "Hour",
            "Indiction",
            "Instant",
            "Intercalation (timekeeping)",
            "ISO 31-2",
            "Jiffy (time)",
            "Julian year (astronomy)",
            "Kalpa (aeon)",
            "Traditional Chinese timekeeping",
            "Kyr",
            "Leap year",
            "Long weekend",
            "Lunar month",
            "Lustrum",
            "Millennium",
            "Minute",
            "Model year",
            "Moment (time)",
            "Month",
            "Mya (unit)",
            "Myr",
            "Nychthemeron",
            "Olympiad",
            "Quadrennium",
            "Pahar",
            "Palya",
            "Planck time",
            "Playing period",
            "Relative hour (Jewish law)",
            "Saeculum",
            "Samay",
            "Samvatsara",
            "Season",
            "Seasonal year",
            "Second",
            "Seconds pendulum",
            "Semester",
            "Semesters",
            "Sexagenary cycle",
            "Shake (unit)",
            "Sidereal time",
            "Sidereal year",
            "Sol (day on Mars)",
            "Solar cycle (calendar)",
            "Sothic cycle",
            "Stage (stratigraphy)",
            "Svedberg",
            "Swatch Internet Time",
            "Synodic day",
            "Ten thousand years",
            "Tithi",
            "Trimester",
            "Tropical year",
            "Tya (unit)",
            "Year",
            "Yuga",
            "Unit of time",
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
