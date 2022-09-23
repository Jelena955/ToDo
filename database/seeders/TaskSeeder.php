<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\DailyList;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['Task1', 'Tsk2', 'Task', 'TAsk4'];
        foreach ($titles as $title) {
            $faker = Faker::create();
            DB::table('tasks')->insert([
                'title' => $title,
                'description' => $faker->text(100),
                'deadline' => $faker->dateTime,
                'done' => $faker->boolean,
                "daily_list_id" => DailyList::all()->random()->id

            ]);
        }
    }
}
