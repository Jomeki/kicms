<?php

namespace Database\Factories;

use App\Models\AppUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppUser>
 */
class AppUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fname =$this->faker->firstName();
        $sname = $this->faker->lastName();
        $lname = 'Kisoka';

        return [
            'fname' => $fname,
            'sname' => $sname,
            'lname' => $lname,
            'full' => $fname.' '.$sname.' '.$lname,
            'dob'=> $this->faker->date(),
            'phone_number' => $this->faker->unique()->numerify($this->faker->randomElement(['2557########', '2556########'])),
//            'role_id'=> $this->faker->numberBetween(1,5),
            'territory_id' => $this->faker->numberBetween(1,3),
            'password' => '12345678',

        ];
    }
}
