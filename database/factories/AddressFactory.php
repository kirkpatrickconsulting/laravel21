<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory {

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'street' => $this->faker->streetAddress,
            'street_2' => '',
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'post_code' => $this->faker->postcode,
            'country_id' => $this->faker->countryCode,
        ];
    }

}
