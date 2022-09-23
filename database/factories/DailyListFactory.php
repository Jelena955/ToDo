<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DailyListFactory extends Factory
{
    public function definition()
    {
        $titles=['Workout', 'Food', 'List3', 'List4'];
        foreach ($titles as $title){
            return [
                'title' => $title,
                'description'=>$this->faker->text(100),
                'date' => $this->faker->date,
                "user_id" => User::all()->random()->id

            ];}
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [

            ];
        });
    }
}
