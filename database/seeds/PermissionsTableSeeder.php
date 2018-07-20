<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Manage Users']);
        Permission::create(['name' => 'Wizard']);
        $adminRole = Role::create(['name' => 'Admin']);
        $adminRole->givePermissionTo('Manage Users');
        $adminRole->givePermissionTo('Wizard');
        //
        $adminUser = User::where('name', 'Admin')->first();
        $adminUser->assignRole('Admin');






    }
}
