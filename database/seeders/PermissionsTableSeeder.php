<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'patient_record_create',
            ],
            [
                'id'    => 18,
                'title' => 'patient_record_edit',
            ],
            [
                'id'    => 19,
                'title' => 'patient_record_show',
            ],
            [
                'id'    => 20,
                'title' => 'patient_record_delete',
            ],
            [
                'id'    => 21,
                'title' => 'patient_record_access',
            ],
            [
                'id'    => 22,
                'title' => 'record_access',
            ],
            [
                'id'    => 23,
                'title' => 'cases_list_create',
            ],
            [
                'id'    => 24,
                'title' => 'cases_list_edit',
            ],
            [
                'id'    => 25,
                'title' => 'cases_list_show',
            ],
            [
                'id'    => 26,
                'title' => 'cases_list_delete',
            ],
            [
                'id'    => 27,
                'title' => 'cases_list_access',
            ],
            [
                'id'    => 28,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}