<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $authors = [
        //     'Minatozaki Sana',
        //     'Yuuho',
        //     'Levi Ackerman',
        //     'Gojo Satoru',
        //     'Hinata Shoyo',
        //     'Mikasa Ackerman',
        //     'Light Yagami',
        //     'Itachi Uchiha',
        //     'Ayanokouji Kiyotaka',
        //     'Lelouch Lamperouge',
        // ];

        $occupations = ['Singer', 'Writer', 'Designer', 'Musician'];

        return [
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'occupation' => $this->faker->randomElement($occupations),
        ];
    }
}
