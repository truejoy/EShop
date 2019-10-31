<?php

use Illuminate\Database\Seeder;
use App\User as User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'turjoybd@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $role_customer = Role::where('name', 'customer')->first();
        $customer = new User();
        $customer->name = 'sumi';
        $customer->email = 'sumi@gmail.com';
        $customer->password = bcrypt('sumi');
        $customer->save();
        $customer->roles()->attach($role_customer);
    }
}
