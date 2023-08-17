<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Adnan Habib',
                'email' => 'hr.admin@gmail.com',
                'role_id' => '1',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Habib Adnan',
                'email' => 'hm.admin@gmail.com',
                'role_id' => '2',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Md Raju',
                'email' => 'employee.admin@gmail.com',
                'role_id' => '3',
                'password' => bcrypt('1234'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
