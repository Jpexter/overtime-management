<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RoleModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            
        ]);

        RoleModel::create([
            'role_name' => 'user',
            'menu' => 'form overtime, cuti, absensi'
        ]);
        
        RoleModel::create([
            'role_name' => 'leader',
            'menu' => 'sebagian halaman'
        ]);
        
        RoleModel::create([
            'role_name' => 'admin',
            'menu' => 'semua halaman'
        ]);

        RoleModel::create([
            'role_name' => 'supervisor',
            'menu' => 'semua halaman'
        ]);
        // User::factory()->create([
        //     'id_role' => RoleModel::where('role_name', 'admin')->first()->id,
        // ]);
    }
}
