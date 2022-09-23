<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DailyList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles=['Workout', 'Food', 'List3', 'List4'];
        foreach ($titles as $title){
            $faker= Faker::create();
            DB::table ('daily_lists')->insert ([
                'title' => $title,
                'description'=>$faker->text(100),
                'date' => $faker->date,
                "user_id" => User::all()->random()->id

            ]);}
    }
}
