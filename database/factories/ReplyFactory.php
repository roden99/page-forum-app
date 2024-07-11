<?php

namespace Database\Factories;

use App\Models\User;
use App\Reply\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        
        return [
            'body' => $this->faker->text,

            'question_id' => function () {
            return Question::all()->random();
            },

            'user_id' => function () {
            return User::all()->random();
            },
        ];
    }
}
