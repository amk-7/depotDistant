<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends \Illuminate\Database\Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // spatie documentation
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'permission_index',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_delete',

            'role_index',
            'role_create',
            'role_show',
            'role_edit',
            'role_delete',

            'employe_index',
            'employe_create',
            'employe_show',
            'employe_edit',
            'employe_delete',

            'produit_index',
            'produit_create',
            'produit_show',
            'produit_edit',
            'produit_delete',

            'commande_index',
            'commande_create',
            'commande_show',
            'commande_edit',
            'commande_delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
