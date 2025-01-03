<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       
        Role::updateOrCreate(['id' => 2], ['name' => 'Utilisateur']);
        Role::updateOrCreate(['id' => 1], ['name' => 'Administrateur']);
        
    }
}
