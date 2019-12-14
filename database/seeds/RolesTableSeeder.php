<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'Dapur']);
        Role::create(['name' => 'Kasir']);
        Role::create(['name' => 'Super User']);
    }
}
