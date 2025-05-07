<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { //Roles================================================================================
        $role_super_admin = Role::create(['guard_name' => 'admin','name'=>'super admin']);
        $role_support_admin=Role::create(['guard_name'=>'admin','name'=>'support admin']);

        //permission======================================================================
        $permission_manage_users = Permission::create(['guard_name' => 'admin', 'name' => 'manage users']);
        $permission_manage_request_company = Permission::create(['guard_name' => 'admin', 'name' => 'manage request']);
        $permission_manage_complement = Permission::create(['guard_name' => 'admin', 'name' => 'manage complement']);
        $permission_manage_roles = Permission::create(['guard_name' => 'admin', 'name' => 'manage roles']);

        $permission_list_admin = Permission::create(['guard_name' => 'admin', 'name' => 'list admins']);
        $permission_add_admin = Permission::create(['guard_name' => 'admin', 'name' => 'add admin']);
        $permission_add_role = Permission::create(['guard_name' => 'admin', 'name' => 'add role']);
        $permission_delete_role = Permission::create(['guard_name' => 'admin', 'name' => 'delete role']);
        $permission_edit_role = Permission::create(['guard_name' => 'admin', 'name' => 'edit role']);



        $role_super_admin->syncPermissions([$permission_manage_users,$permission_manage_complement,

        $permission_manage_request_company,$permission_list_admin,
        $permission_add_admin,$permission_add_role,
        $permission_delete_role,$permission_edit_role,
        $permission_manage_roles




    ]);

        $role_support_admin->syncPermissions([$permission_manage_users,$permission_add_role,$permission_manage_roles]);
        $admin1=Admin::find(1);
        $admin1->assignRole($role_super_admin);


        $admin2=Admin::find(2);
        $admin2->assignRole($role_support_admin);



    }
}
