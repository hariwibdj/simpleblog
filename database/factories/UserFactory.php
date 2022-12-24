<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name'=> $this->faker->name(),
           'email'=>$this->faker->unique()->safeEmail(),
           'email_verified_at'=> now(),
           'password'=>'$2y$10$c1sJTRq/fEes9VTZnU/EIega9qMO4hTOO80AY2XYQoyqpCfQRzYVC',
        //    'remember_token'=>Str::random(10),
           'remember_token'=> $this->faker->randomDigitNotNull(),
        ];
    }
}
