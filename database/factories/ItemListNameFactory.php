<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ListName;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemListNameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "item_id" => Item::all()->random()->id,
            "listname_id" => ListName::all()->random()->id,
            "pieces" => fake()->numberBetween(1, 10)
        ];
    }
}
