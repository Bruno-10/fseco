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
        DB::table('categorias')->insert([
            'id' => '1',
            'nombre' => 'paletas'
        ]);
        DB::table('categorias')->insert([
            'id' => '2',
            'nombre' => 'indumentaria'
        ]);
        DB::table('categorias')->insert([
            'id' => '3',
            'nombre' => 'accesorios'
        ]);
        DB::table('categorias')->insert([
            'id' => '4',
            'nombre' => 'paleteros'
        ]);
        DB::table('categorias')->insert([
            'id' => '5',
            'nombre' => 'pelotas'
        ]);
    }
}
