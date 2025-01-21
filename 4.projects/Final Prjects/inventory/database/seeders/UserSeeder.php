<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        $permissions = Permission::get();

        $role = Role::find(1);
        $role->syncPermissions($permissions);

        $user->assignRole($role);

        $customer = Role::find(2);

        $orders_permissions = Permission::where('name', 'like', '%orders%')->where('name', '!=', 'orders-admin')->get();
        $transactions_users_permissions = Permission::where('name', 'like', '%transactions-users%')->get();
        $transactions_access_permissions = Permission::where('name', 'like', '%transactions-access%')->get();
        $dashboard_access_permissions = Permission::where('name', 'like', '%dashboard-access%')->get();
        $dashboard_users_permissions = Permission::where('name', 'like', '%dashboard-users%')->get();

        $all_permissions_users = $orders_permissions
            ->merge($transactions_users_permissions)
            ->merge($transactions_access_permissions)
            ->merge($dashboard_access_permissions)
            ->merge($dashboard_users_permissions);

        $customer->syncPermissions($all_permissions_users);
    }
}
