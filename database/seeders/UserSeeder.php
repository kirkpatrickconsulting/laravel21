<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Address;
use App\Models\Phone;
use App\Models\Contact;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //\App\Models\User::factory()->count(500)->create();

//        // Create initial user
//        $user = User::factory()->create([
//            'name' => 'Brian Kirkpatrick',
//            'email' => 'kirkpatrickconsulting@gmail.com',
//            'password' => bcrypt('Raiders11'),
//        ]);
//
//        // Seed the relation with one address
//        $address = Address::factory()->make();
//        $user->address()->save($address);
//
//        // Seed the relation with one phone
//        $phone = Phone::factory()->make();
//        $user->phone()->save($phone);
//
//        // Seed the relation with 25 contacts
//        $contacts = Contact::factory()->count(25)->make();
//        $user->contacts()->saveMany($contacts);
    }

}
