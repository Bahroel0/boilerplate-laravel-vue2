<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SUPER
        $superRole = Role::create(['name' => 'SUPER']);
        $superPermission = [
            'users/*', 
            'log/*',
            'profile/*'
        ];
        foreach($superPermission as $x)
        {
            $permission = Permission::create(['name' => $x]);
            $superRole->givePermissionTo($permission);
        }
        $superUser = User::create([
            'name' => 'Mr. Super',
            'email' => 'super@mail.com',
            'password' => Hash::make('#super123')
        ]);
        $superUser->assignRole($superRole);
        // END SUPER

        // ADMIN
        $adminRole = Role::create(['name' => 'ADMIN']);
        $adminPermissions = [
            'users/*', 
            'profile/*'
        ];
        foreach($adminPermissions as $x)
        {
            $permission = Permission::firstOrCreate(['name' => $x]);
            $adminRole->givePermissionTo($permission);
        }
        $adminUser = User::create([
            'name' => 'Mr. Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('#admin123')
        ]);
        $adminUser->assignRole($adminRole);
        // END ADMIN

        // Users
        $userRole = Role::create(['name' => 'USER']);
        $userPermission = [
            'users/*', 
            'profile/*'
        ];
        foreach($userPermission as $x)
        {
            $permission = Permission::firstOrCreate(['name' => $x]);
            $userRole->givePermissionTo($permission);
        }
        $user = User::create([
            'name' => 'Mr. User',
            'email' => 'user@mail.com',
            'password' => Hash::make('#user123')
        ]);
        $user->assignRole($userRole);
        // END Users
    }
}
