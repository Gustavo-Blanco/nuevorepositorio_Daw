<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;
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
        DB::table('roles_user')->truncate();

        $adminRol = Roles::where('nombre', 'admin')->first();
        $userRol = Roles::where('nombre', 'user')->first();

        $user = User::create([
            'name' => 'Usuario Test',
            'username' => 'usertest',
            'email' => 'usuariotest@tecsup.com',
            'password' => Hash::make('test123')
        ]);

        $admin = User::create([
            'name' => 'Usuario Admin',
            'username' => 'admintest',
            'email' => 'admintest@tecsup.com',
            'password' => Hash::make('test123')
        ]);
        
        $user->roles()->attach($userRol);
        $admin->roles()->attach($adminRol);
    }
}
