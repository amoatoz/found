<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_guest = Role::where('name', 'guest')->first();
    $role_regularuser  = Role::where('name', 'regularuser')->first();
    $role_superadmin  = Role::where('name', 'superadmin')->first();

    $regularuser = new User();
    $regularuser->name = 'firstuser';
    $regularuser->email = 'regularUser@example.com';
    $regularuser->password = bcrypt('secret');
    $regularuser->save();

    $regularuser->roles()->attach($role_regularuser);

    $superadmin = new User();
    $superadmin->name = 'amo_sadmin';
    $superadmin->email = 'superadmin@example.com';
    $superadmin->password = bcrypt('secret');
    $superadmin->save();
    $superadmin->roles()->attach($role_superadmin);
    

    }
}
