<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'cep' => fake()->postcode,
            'endereco' => fake()->streetAddress,
            'bairro' => fake()->streetName,
            'complemento' => fake()->secondaryAddress,
            'numero' => fake()->buildingNumber,
            'estado' => fake()->stateAbbr,
            'cidade' => fake()->city,
            'patient_id' => Patient::factory(),
        ];
    }
}
