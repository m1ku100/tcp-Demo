<?php

use App\Support\Roles;
use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        foreach (Roles::ALL as $item) {
            $role =  \App\Models\Role::create([
                'nama' => $item
            ]);
            $name = $faker->name;
            if ($role->nama == Roles::ROOT){
                User::create([
                    'role_id' => $role->id,
                    'name' => 'ROOT',
                    'nip' => $faker->numerify('################'),
                    'username' => 'root',
                    'email' =>'root@mail.com',
                    'password' => bcrypt('secret')
                ]);
            }else {

                User::create([
                    'role_id' => $role->id,
                    'name' => $name,
                    'nip' => $faker->numerify('################'),
                    'username' => $name,
                    'email' => $faker->safeEmail,
                    'password' => bcrypt('secret')
                ]);
            }
        }
    }
}
