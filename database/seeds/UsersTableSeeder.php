<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
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
        //factory(App\User::class, 20)->create();

        // Role::create([
        // 	'name' => 'Admin',
        // 	'slug' => 'admin',
        // 	'special' => 'all-access'
        // ]);
        // $data = array(
        //     [
        //         'name'      => 'Admin', 
        //         'email'     => 'admin@mail.com', 
        //         'username'  => 'admin',
        //         'password'  => \Hash::make('123456'),
        //         'created_at'=> new DateTime,
        //         'updated_at'=> new DateTime
        //     ],
        // );
        // User::insert($data);
        $data = array(
            [
                'name'      => 'Vendedor', 
                'email'     => 'vendedor@mail.com', 
                'username'  => 'vendedor',
                'password'  => \Hash::make('123456'),
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
        );
        User::insert($data);
    }
}
