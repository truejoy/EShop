<?php

use Illuminate\Database\Seeder;

use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'admin', 'description' => 'A role for admins']);
        // Role::create(['name' => 'customer', 'description' => 'A role for customers']);
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Admin User';
        $role_admin->save();

        $role_customer = new Role();
        $role_customer->name = 'customer';
        $role_customer->description = 'General Customer';
        $role_customer->save();
    }
}
