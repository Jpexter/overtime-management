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

        RoleModel::create([
            'role_name' => 'admin',
            'menu' => 'semua halaman'
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
            'role_name' => 'supervisor',
            'menu' => 'semua halaman'
        ]);
        User::create([
            'name' => 'admin',
            'username' => 'admin201',
            'email' => 'admin201@gmail.com',
            'password' => '$2y$10$3iDtj5bHJAmyEOC93uLGueRxJ4Pw0nhUO.V5lAA6EjFYth1zi8IsG',
            'phone_number' => '085738717237',
            'id_role' => '1'
        ]);
    }
}
