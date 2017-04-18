<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$role_employee = new Role();
		$role_employee->name = 'guests';
		$role_employee->description = 'A guest Users - Not signed in';
		    $role_employee->save();

		    $role_manager = new Role();
		    $role_manager->name = 'superadmin';
		    $role_manager->description = 'A Superadmin (god) User';
		    $role_manager->save();

                    $role_manager = new Role();
            $role_manager->name = 'regularuser';
            $role_manager->description = 'A main or regular User - Signed ind';
            $role_manager->save();   

    }
}
