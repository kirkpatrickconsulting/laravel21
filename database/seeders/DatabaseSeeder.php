<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Phone;
use App\Models\Address;
use App\Models\Contact;

class DatabaseSeeder extends Seeder {

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\User::class;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        // $this->call(PhoneSeeder::class);
        // $this->call(AddressSeeder::class);

        $this->call(ContactFormSeeder::class);
        //$this->call(ContactSeeder::class);

        User::factory()->count(20)->create()->each(function ($user) {
            // Seed the relation with one address
            $address = Address::factory()->make();
            $user->address()->save($address);

            // Seed the relation with one phone
            $phone = Phone::factory()->make();
            $user->phone()->save($phone);

            // Seed the relation with 15 contacts
            $contact = Contact::factory()->count(25)->make();
            $user->contacts()->saveMany($contact);
        });
    }

}
