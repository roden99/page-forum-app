<?php

namespace Database\Factories;


use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Question;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Reply\Question>
 */



class QuestionFactory extends Factory
{

    protected $model = Question::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug'=>Str::slug($this->faker->sentence),
            'body' => $this->faker->text,
            'category_id' => function () {
                return Category::all()->random();
            },
            'user_id' => function () {
                return User::all()->random();
            }
        ];
    }
}


