<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $c_level = Role::create(['name' => 'administrator']);
        $user_management_permission = [
            [
                'name'  => 'create user'
            ],
            [
                'name'  => 'view user'
            ],
            [
                'name'  => 'delete user'
            ],
            [
                'name'  => 'suspend user'
            ],
            [
                'name'  => "view activity log"
            ],
            [
                'name'  => "view system log"
            ],
            [
                'name'  => 'disable user',
            ],
            [
                'name'  => 'change role',
            ],
            [
                'name'  => 'change permission',
            ],
            [
                'name'  => 'view telescope'
            ],
            [
                'name'  => 'view dashboard'
            ]
        ]; 

        foreach ($user_management_permission as $permission)
        {
            $permission = Permission::create($permission);
        }

        $c_level->givePermissionTo(Permission::all());
    }
}
