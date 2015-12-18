<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'name' => 'Doe',
            'email' => 'doe@example.com',
            'password' => Hash::make('123'),
        ]);

        Model::reguard();
    }
}
