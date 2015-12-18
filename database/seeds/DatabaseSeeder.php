<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
		User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'first_name' => 'Doe',
            'last_name' => 'John',
            'email' => 'doe@example.com',
            'password' => Hash::make('123'),
        ]);

        Model::reguard();
    }
}
