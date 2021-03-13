<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'contact-list',
            'contact-create',
            'contact-edit',
            'contact-delete',
            'address-list',
            'address-create',
            'address-edit',
            'address-delete',
            'phone-list',
            'phone-create',
            'phone-edit',
            'phone-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'dashboard',
            'football'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }

}
