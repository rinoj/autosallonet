<?php

use Illuminate\Database\Seeder;

class RPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'view-admin',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'view-page',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'manage-roles-permissions',
            'guard_name' => 'web',
        ]);

        DB::table('permissions')->insert([
            'name' => 'manage-users',
            'guard_name' => 'web',
        ]);


        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'client',
            'guard_name' => 'web',
        ]);
        

        DB::table('role_has_permissions')->insert([
            'permission_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => 3,
            'role_id' => 1,
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => 4,
            'role_id' => 1,
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => 2,
            'role_id' => 1,
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id'	=>	1,
        ]);

    }
}
