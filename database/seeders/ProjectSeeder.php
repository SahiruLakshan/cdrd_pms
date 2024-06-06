<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startTimestamp = strtotime('2020-01-01');
        $endTimestamp = strtotime('2024-12-31');

        for ($i = 0; $i < 10; $i++) {
            $randomTimestamp = mt_rand($startTimestamp, $endTimestamp);
            $randomStartDate = date('Y-m-d', $randomTimestamp);
            $randomEndDateTimestamp = mt_rand($randomTimestamp, $endTimestamp);
            $randomEndDate = date('Y-m-d', $randomEndDateTimestamp);

            $randomDouble = mt_rand(100000, 1000000) / 100;
            $prandomDouble = mt_rand(10000, 100000) / 100;

            DB::table('project')->insert([
                'no' => Str::random(10),
                'rc' => Str::random(10) . '35',
                'pname' => Str::random(10),
                'wing' => Str::random(10) . ' Marine Wing',
                'end_user' => Str::random(10),
                'start_date' => $randomStartDate,
                'end_date' => $randomEndDate,
                'ecost' => $randomDouble,
                'pexpenditure' => $prandomDouble,
                'allocation' => $prandomDouble,
                'expenditure' => $prandomDouble,
                'commitment' => $prandomDouble,
                'progress' => $prandomDouble,
                'status_lastweek' => Str::random(10),
                'next_week' => Str::random(10),
                'remaining_work' => Str::random(10),
                'issues'=> Str::random(10),
            ]);
        }
    }
}
