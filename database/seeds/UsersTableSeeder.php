<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $DapurRole = Role::where('name', '=', 'Dapur')->first();
        $KasirRole = Role::where('name', '=', 'Kasir')->first();
        $SuperUserRole = Role::where('name', '=', 'Super User')->first();

        $dapur = User::create([
            'name' => 'Dapur',
            'email' => 'dapur@yahoo.com',
            'password' => bcrypt('dapur123')
        ]);
        $kasir = User::create([
            'name' => 'Kasir',
            'email' => 'kasir@yahoo.com',
            'password' => bcrypt('kasir123')
        ]);
        $admin = User::create([
            'name' => 'Super User',
            'email' => 'SuperUser@yahoo.com',
            'password' => bcrypt('SuperUser')
        ]);
        $dapur->roles()->attach($DapurRole);
        $kasir->roles()->attach($KasirRole);
        $admin->roles()->attach($SuperUserRole);
    }
}
