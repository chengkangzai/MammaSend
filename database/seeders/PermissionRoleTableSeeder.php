<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use function substr;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $allPermissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($allPermissions->pluck('id'));
        $staff_permissions = $allPermissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(2)->permissions()->sync($staff_permissions);

        $endUserPermissions = $allPermissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(3)->permissions()->sync($endUserPermissions);
        Role::findOrFail(4)->permissions()->sync($endUserPermissions);
    }
}
