<?php

use Illuminate\Database\Seeder;

class MnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Module
        $moduleId = DB::table('modules')->insertGetId([
            'name' => 'mns',
            'display_name' => 'Mns',
            'icon' => 'icon-mns',
            'active' => false
        ]);

        // Permissions
        DB::table('permissions')->insert([
            [
                'name' => 'read-mns',
                'display_name' => 'Read Mobile Network Subscribers and Coverage Data',
                'guard_name' => 'web',
                'module_id' => $moduleId
            ],
            [
                'name' => 'update-mns',
                'display_name' => 'Update Mobile Network Subscribers and Coverage Data',
                'guard_name' => 'web',
                'module_id' => $moduleId
            ],
            [
                'name' => 'delete-mns',
                'display_name' => 'Delete Mobile Network Subscribers and Coverage Data',
                'guard_name' => 'web',
                'module_id' => $moduleId
            ],

            [
                'name' => 'create-mns',
                'display_name' => 'Create Mobile Network Subscribers and Coverage Data',
                'guard_name' => 'web',
                'module_id' => $moduleId
            ]

            ]);

        // Assign permissions to admin role
        // $admin = Role::findByName('admin');
        // $admin->givePermissionTo(Permission::all());

        // Assign permissions to user role
        $user = Role::findByName('user');
        $user->givePermissionTo('read-mns', 'update-mns', 'create-mns', 'delete-mns');

    }
    
}
