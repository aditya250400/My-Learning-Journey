<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'dashboard-access'],
            ['name' => 'dashboard-users'],
            ['name' => 'dashboard-admin'],
            ['name' => 'users-access'],
            ['name' => 'users-update-role'],
            ['name' => 'users-update'],
            ['name' => 'users-delete'],
            ['name' => 'permissions-access'],
            ['name' => 'permissions-create'],
            ['name' => 'permissions-update'],
            ['name' => 'permissions-delete'],
            ['name' => 'roles-access'],
            ['name' => 'roles-create'],
            ['name' => 'roles-update'],
            ['name' => 'roles-delete'],
            ['name' => 'categories-access'],
            ['name' => 'categories-create'],
            ['name' => 'categories-update'],
            ['name' => 'categories-delete'],
            ['name' => 'suppliers-access'],
            ['name' => 'suppliers-create'],
            ['name' => 'suppliers-update'],
            ['name' => 'suppliers-delete'],
            ['name' => 'products-access'],
            ['name' => 'products-create'],
            ['name' => 'products-update'],
            ['name' => 'products-delete'],
            ['name' => 'stocks-access'],
            ['name' => 'stocks-create'],
            ['name' => 'transactions-access'],
            ['name' => 'transactions-admin'],
            ['name' => 'transactions-users'],
            ['name' => 'orders-access'],
            ['name' => 'orders-create'],
            ['name' => 'orders-update'],
            ['name' => 'orders-delete'],
            ['name' => 'orders-users'],
            ['name' => 'orders-admin'],
            ['name' => 'reports-access'],
        ])->each(fn($data) => Permission::create($data));
    }
}
