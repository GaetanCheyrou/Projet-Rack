<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_laptop' => fake()->boolean(),
            'brand' => fake()->randomElement(['Apple', 'Asus', 'Dell', 'HP', 'Lenovo', 'Microsoft', 'Samsung', 'Sony', 'Toshiba']),
            'os' => fake()->randomElement(['Windows', 'MacOS', 'Linux']),
            'processor' => fake()->randomElement(['Intel Core i3', 'Intel Core i5', 'Intel Core i7', 'Intel Core i9', 'AMD Ryzen 3', 'AMD Ryzen 5', 'AMD Ryzen 7', 'AMD Ryzen 9']),
            'ram' => fake()->randomElement([4, 8, 16, 32, 64]),
            'storage' => fake()->randomElement([128, 256, 512, 1024, 2048]),
            'graphic_card' => fake()->boolean(),
            'cd_player' => fake()->boolean(),
            'sd_card_reader' => fake()->boolean(),
            'spotlight' => fake()->boolean(),
            'usb_ports' => fake()->randomElement([2, 3, 4, 5, 6]),
            'member_id' => Member::factory(),
        ];
    }
}
