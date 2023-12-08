<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\UserGroup;
use App\Models\UserGroupPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_groups = [
            [
                'name' => 'Admin',
                'code' => 'ADMIN',
                'description' => 'Admin user groups'
            ]
        ];

        $permissions = Permission::all();

        foreach ($user_groups as $user_group) {
            $user_group = UserGroup::create($user_group);

            // create user group permissions
            foreach ($permissions as $permission) {
                UserGroupPermission::create([
                    'user_group_id' => $user_group->id,
                    'permission_id' => $permission->id
                ]);
            }
        }
    }
}
