<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {
            
            Permission::create(['name' => 'read']);
            Permission::create(['name' => 'create']);
            Role::create(['name' => 'user'])->givePermissionTo(['read']);
            Role::create(['name' => 'admin'])->givePermissionTo(['create']);
            
            // $user->assignRole('user');
            // $admin->assignRole('admin');
            
                $user = User::create([
                    'name' => 'user',
                    'email' => 'user@gmail.com',
                    'password' => bcrypt('password'),
                    'remember_token' => Str::random(10),
                ])->assignRole('user');
                $admin = User::create([
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('password'),
                    'remember_token' => Str::random(10),
                ])->assignRole('admin');
        DB::commit();
        }catch(\Trhowable $th){
            DB::rollback();
        }
    }
}
