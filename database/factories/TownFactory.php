<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Town>
 */
class TownFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Montréal',
                'Québec',
                'Laval',
                'Gatineau',
                'Longueuil',
                'Sherbrooke',
                'Trois-Rivières',
                'Saguenay',
                'Lévis',
                'Drummondville',
                'Saint-Jérôme',
                'Granby',
                'Victoriaville',
                'Rimouski',
                'Rouyn-Noranda',
                'Val-d’Or',
                'Baie-Comeau',
                'Sept-Îles',
                'Alma',
                'Chicoutimi',
            ]),
        ];
    }
}
