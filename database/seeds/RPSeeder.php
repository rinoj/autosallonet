<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\PermissionAlreadyExists;

class RPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(Permission::class)->create(['name' => 'view-admin', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'view-page', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-roles-permissions', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-markat-modelet', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-users', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-veturat', 'guard_name' => 'web']);
        app(Permission::class)->create(['name' => 'manage-sallonet', 'guard_name' => 'web']);


        $admin = app(Role::class)->create(['name' => 'admin', 'guard_name' => 'web']);
        $autosallon = app(Role::class)->create(['name' => 'autosallon', 'guard_name' => 'web']);


        $admin->givePermissionTo('view-page');
        $admin->givePermissionTo('view-admin');
        $admin->givePermissionTo('manage-roles-permissions');
        $admin->givePermissionTo('manage-markat-modelet');
        $admin->givePermissionTo('manage-users');
        $admin->givePermissionTo('manage-veturat');
        $admin->givePermissionTo('manage-sallonet');
        
        $autosallon->givePermissionTo('view-admin');
        $autosallon->givePermissionTo('manage-veturat');
        

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id'  =>  1,
        ]);

         DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id'  =>  2,
        ]);

    }
}
