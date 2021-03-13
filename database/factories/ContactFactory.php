<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory {

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'salutation' => $this->faker->title,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email_address' => $this->faker->freeEmail,
            'company' => $this->faker->company,
            'job_title' => $this->faker->jobTitle,
            'department' => '',
            'website' => $this->faker->url,
            'office_phone' => $this->faker->phoneNumber,
            'mobile_phone' => $this->faker->phoneNumber,
            'fax_number' => $this->faker->phoneNumber,
        ];
    }

}
