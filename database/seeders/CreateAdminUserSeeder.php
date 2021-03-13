<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Address;
use App\Models\Phone;
use App\Models\Contact;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = User::create([
                    'name' => 'Brian Kirkpatrick',
                    'email' => 'bk91604@hotmail.com',
                    'password' => bcrypt('Raiders11')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        // Seed the relation with one address
        $address = Address::factory()->make();
        $user->address()->save($address);

        // Seed the relation with one phone
        $phone = Phone::factory()->make();
        $user->phone()->save($phone);

        // Seed the relation with 25 contacts
        $contacts = Contact::factory()->count(25)->make();
        $user->contacts()->saveMany($contacts);
    }

}
