<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
//        $allPermissions = Permission::all();
//        Role::findOrFail(1)->permissions()->sync($allPermissions->pluck('id'));
//        $staff_permissions = $allPermissions->filter(function ($permission) {
//            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
//        });
//        Role::findOrFail(2)->permissions()->sync($staff_permissions);
//
//        $customerUserPermissions = $allPermissions->filter(function ($permission) {
//            return substr($permission->title, 0, 13) != 'payment_access' &&substr($permission->title, 0, 13) != 'wizard_driver' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
//        });
//        Role::findOrFail(3)->permissions()->sync($customerUserPermissions);
//        $driverUserPermissions = $allPermissions->filter(function ($permission) {
//            return substr($permission->title, 0, 15) != 'wizard_customer' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
//        });
//        Role::findOrFail(4)->permissions()->sync($driverUserPermissions);
        $permission_role = array(
            array('role_id' => '1','permission_id' => '1'),
            array('role_id' => '1','permission_id' => '2'),
            array('role_id' => '1','permission_id' => '3'),
            array('role_id' => '1','permission_id' => '4'),
            array('role_id' => '1','permission_id' => '5'),
            array('role_id' => '1','permission_id' => '6'),
            array('role_id' => '1','permission_id' => '7'),
            array('role_id' => '1','permission_id' => '8'),
            array('role_id' => '1','permission_id' => '9'),
            array('role_id' => '1','permission_id' => '10'),
            array('role_id' => '1','permission_id' => '11'),
            array('role_id' => '1','permission_id' => '12'),
            array('role_id' => '1','permission_id' => '13'),
            array('role_id' => '1','permission_id' => '14'),
            array('role_id' => '1','permission_id' => '15'),
            array('role_id' => '1','permission_id' => '16'),
            array('role_id' => '1','permission_id' => '17'),
            array('role_id' => '1','permission_id' => '18'),
            array('role_id' => '1','permission_id' => '19'),
            array('role_id' => '1','permission_id' => '20'),
            array('role_id' => '1','permission_id' => '21'),
            array('role_id' => '1','permission_id' => '22'),
            array('role_id' => '1','permission_id' => '23'),
            array('role_id' => '1','permission_id' => '24'),
            array('role_id' => '1','permission_id' => '25'),
            array('role_id' => '1','permission_id' => '26'),
            array('role_id' => '1','permission_id' => '27'),
            array('role_id' => '1','permission_id' => '28'),
            array('role_id' => '1','permission_id' => '29'),
            array('role_id' => '1','permission_id' => '30'),
            array('role_id' => '1','permission_id' => '31'),
            array('role_id' => '1','permission_id' => '32'),
            array('role_id' => '1','permission_id' => '33'),
            array('role_id' => '1','permission_id' => '34'),
            array('role_id' => '1','permission_id' => '35'),
            array('role_id' => '1','permission_id' => '36'),
            array('role_id' => '1','permission_id' => '37'),
            array('role_id' => '1','permission_id' => '38'),
            array('role_id' => '1','permission_id' => '39'),
            array('role_id' => '1','permission_id' => '40'),
            array('role_id' => '1','permission_id' => '41'),
            array('role_id' => '1','permission_id' => '42'),
            array('role_id' => '1','permission_id' => '43'),
            array('role_id' => '1','permission_id' => '44'),
            array('role_id' => '1','permission_id' => '45'),
            array('role_id' => '1','permission_id' => '46'),
            array('role_id' => '1','permission_id' => '47'),
            array('role_id' => '1','permission_id' => '48'),
            array('role_id' => '1','permission_id' => '49'),
            array('role_id' => '1','permission_id' => '50'),
            array('role_id' => '2','permission_id' => '1'),
            array('role_id' => '2','permission_id' => '12'),
            array('role_id' => '2','permission_id' => '13'),
            array('role_id' => '2','permission_id' => '14'),
            array('role_id' => '2','permission_id' => '15'),
            array('role_id' => '2','permission_id' => '16'),
            array('role_id' => '2','permission_id' => '17'),
            array('role_id' => '2','permission_id' => '18'),
            array('role_id' => '2','permission_id' => '19'),
            array('role_id' => '2','permission_id' => '20'),
            array('role_id' => '2','permission_id' => '21'),
            array('role_id' => '2','permission_id' => '22'),
            array('role_id' => '2','permission_id' => '23'),
            array('role_id' => '2','permission_id' => '24'),
            array('role_id' => '2','permission_id' => '25'),
            array('role_id' => '2','permission_id' => '26'),
            array('role_id' => '2','permission_id' => '27'),
            array('role_id' => '2','permission_id' => '28'),
            array('role_id' => '2','permission_id' => '29'),
            array('role_id' => '2','permission_id' => '30'),
            array('role_id' => '2','permission_id' => '31'),
            array('role_id' => '2','permission_id' => '32'),
            array('role_id' => '2','permission_id' => '33'),
            array('role_id' => '2','permission_id' => '34'),
            array('role_id' => '2','permission_id' => '35'),
            array('role_id' => '2','permission_id' => '36'),
            array('role_id' => '2','permission_id' => '37'),
            array('role_id' => '2','permission_id' => '38'),
            array('role_id' => '2','permission_id' => '39'),
            array('role_id' => '2','permission_id' => '40'),
            array('role_id' => '2','permission_id' => '41'),
            array('role_id' => '2','permission_id' => '42'),
            array('role_id' => '2','permission_id' => '43'),
            array('role_id' => '2','permission_id' => '44'),
            array('role_id' => '2','permission_id' => '45'),
            array('role_id' => '2','permission_id' => '46'),
            array('role_id' => '2','permission_id' => '47'),
            array('role_id' => '2','permission_id' => '48'),
            array('role_id' => '2','permission_id' => '49'),
            array('role_id' => '2','permission_id' => '50'),
            array('role_id' => '3','permission_id' => '14'),
            array('role_id' => '3','permission_id' => '17'),
            array('role_id' => '3','permission_id' => '18'),
            array('role_id' => '3','permission_id' => '19'),
            array('role_id' => '3','permission_id' => '20'),
            array('role_id' => '3','permission_id' => '21'),
            array('role_id' => '3','permission_id' => '22'),
            array('role_id' => '3','permission_id' => '24'),
            array('role_id' => '3','permission_id' => '26'),
            array('role_id' => '3','permission_id' => '27'),
            array('role_id' => '3','permission_id' => '29'),
            array('role_id' => '3','permission_id' => '31'),
            array('role_id' => '3','permission_id' => '40'),
            array('role_id' => '3','permission_id' => '42'),
            array('role_id' => '3','permission_id' => '43'),
            array('role_id' => '3','permission_id' => '44'),
            array('role_id' => '3','permission_id' => '45'),
            array('role_id' => '3','permission_id' => '46'),
            array('role_id' => '3','permission_id' => '47'),
            array('role_id' => '3','permission_id' => '48'),
            array('role_id' => '3','permission_id' => '49'),
            array('role_id' => '4','permission_id' => '14'),
            array('role_id' => '4','permission_id' => '17'),
            array('role_id' => '4','permission_id' => '18'),
            array('role_id' => '4','permission_id' => '19'),
            array('role_id' => '4','permission_id' => '20'),
            array('role_id' => '4','permission_id' => '22'),
            array('role_id' => '4','permission_id' => '23'),
            array('role_id' => '4','permission_id' => '24'),
            array('role_id' => '4','permission_id' => '25'),
            array('role_id' => '4','permission_id' => '26'),
            array('role_id' => '4','permission_id' => '27'),
            array('role_id' => '4','permission_id' => '28'),
            array('role_id' => '4','permission_id' => '29'),
            array('role_id' => '4','permission_id' => '30'),
            array('role_id' => '4','permission_id' => '31'),
            array('role_id' => '4','permission_id' => '40'),
            array('role_id' => '4','permission_id' => '42'),
            array('role_id' => '4','permission_id' => '43'),
            array('role_id' => '4','permission_id' => '44'),
            array('role_id' => '4','permission_id' => '46'),
            array('role_id' => '4','permission_id' => '47'),
            array('role_id' => '4','permission_id' => '50')
        );
        DB::table('permission_role')->insert($permission_role);
//        Permission::insert($permission_role);
    }
}
