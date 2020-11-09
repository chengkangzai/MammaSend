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

        $customerUserPermissions = $allPermissions->filter(function ($permission) {
            return substr($permission->title, 0, 13) != 'payment_access' &&substr($permission->title, 0, 13) != 'wizard_driver' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(3)->permissions()->sync($customerUserPermissions);
        $driverUserPermissions = $allPermissions->filter(function ($permission) {
            return substr($permission->title, 0, 15) != 'wizard_customer' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(4)->permissions()->sync($driverUserPermissions);
    }
}
