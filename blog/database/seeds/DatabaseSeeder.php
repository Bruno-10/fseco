<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'nombre' => 'Admin',
            'apellido'=> 'Admin',
            'pais' => 'Argentina',
            'provincia' => 'SantaFe',
            'img' => 'nada',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234')
        ]);
    }
}
