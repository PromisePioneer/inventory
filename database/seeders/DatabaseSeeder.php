<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $admin = Role::create(['name' => 'admin']);
        $employee = Role::create(['name' => 'employee']);

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@inventory.com',
            'password' => Hash::make('password')
        ]);
        $user->assignRole($admin);


        $user = User::factory()->create([
            'name' => 'employee',
            'email' => 'emp@inventory.com',
            'password' => Hash::make('password')
        ]);
        $user->assignRole($employee);


        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){

            // insert data ke table pegawai menggunakan Faker
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
            ]);

        }
    }
}
