<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name'=> 'Administrator',
            'apellidoPaterno'=> 'Administrator',
            'apellidoMaterno' => 'Administrator',
            'telefono' => '9191735421',
            'email'     => 'admin@gmail.com',
            'user'     => 'Administrador',
            'password'  =>  Hash::make('admin2022'),
            'tipo'     => 'ADMIN',

        ]);
    }
}
