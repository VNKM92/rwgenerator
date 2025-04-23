<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'user']);

        $user = User::create([
            'name' => 'Vinay', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $role = Role::create(['name' => 'admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);


        // $adminRole = Role::create(['name' => 'admin']);

        // $editPermission = Permission::create(['name' => 'edit articles']);
        // $viewPermission = Permission::create(['name' => 'view articles']);

        // // Assign permissions to roles
        // $adminRole->givePermissionTo($editPermission, $viewPermission);
        // $userRole->givePermissionTo($viewPermission);

        // // Assign role to user
        // $user = User::find(1); // Example user with ID 1
        // $user->assignRole('admin');



    }
}
