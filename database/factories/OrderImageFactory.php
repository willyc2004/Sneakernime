<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
<<<<<<<< Updated upstream:database/factories/OrderImageFactory.php
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderImage>
 */
class OrderImageFactory extends Factory
========
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
>>>>>>>> Stashed changes:database/factories/OrderFactory.php
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
