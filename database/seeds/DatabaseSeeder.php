<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'     => 'Nicolas Navarrete Clemente',
            'nickname' => 'nicosli',
            'email'    => 'nicosli@gmail.com',
            'password' => bcrypt('tamales'),
            'avatar'   => 'https://graph.facebook.com/v2.6/1396397923710124/picture?type=normal',
            'estado'   => 1,
            'idSocial' => '1396397923710124'
        ]);

        DB::table('users')->insert([
            'name'     => 'Abril Rosado Huerta',
            'nickname' => 'lirba',
            'email'    => 'lirba304@hotmail.com',
            'estado'   => 1,
            'password' => bcrypt('atardecer3004'),
        ]);

        /*---- Categorias ----*/
        DB::table('categorias')->insert([
            'estado'       => 1,
            'nombre'       => 'Damas',
            'descripcion'  => 'Categoría para la ropa de Damas'
        ]);
        DB::table('categorias')->insert([
            'estado'       => 1,
            'nombre'       => 'Caballeros',
            'descripcion'  => 'Categoría para la ropa de Caballeros'
        ]);
        DB::table('categorias')->insert([
            'estado'       => 1,
            'nombre'       => 'Niños',
            'descripcion'  => 'Categoría para la ropa de Niños'
        ]);
        DB::table('categorias')->insert([
            'estado'       => 1,
            'nombre'       => 'Niñas',
            'descripcion'  => 'Categoría para la ropa de Niñas'
        ]);
        DB::table('categorias')->insert([
            'estado'       => 0,
            'nombre'       => '3era edad',
            'descripcion'  => 'Categoría para la ropa de 3era edad'
        ]);

        /*---- Colores ----*/
        DB::table('colores')->insert([
            'estado'       => 1,
            'nombre'       => 'Azul',
            'descripcion'  => 'Color definido Azul'
        ]);
        DB::table('colores')->insert([
            'estado'       => 1,
            'nombre'       => 'Rojo',
            'descripcion'  => 'Color definido Rojo'
        ]);
        DB::table('colores')->insert([
            'estado'       => 1,
            'nombre'       => 'Blanco',
            'descripcion'  => 'Color definido Blanco'
        ]);
        DB::table('colores')->insert([
            'estado'       => 1,
            'nombre'       => 'Negro',
            'descripcion'  => 'Color definido Negro'
        ]);
        DB::table('colores')->insert([
            'estado'       => 1,
            'nombre'       => 'Beige',
            'descripcion'  => 'Color definido Beige'
        ]);
        DB::table('colores')->insert([
            'estado'       => 1,
            'nombre'       => 'Amarillo',
            'descripcion'  => 'Color definido Amarillo'
        ]);

        /*---- Proveedores ----*/
        DB::table('proveedores')->insert([
            'estado'            => 1,
            'nombre'            => 'Nekkyn Chetumal',
            'representante'     => 'Eva Clemente Perez',
            'telefono'          => '9981271444',
            'email'             => 'yasurynavarrete1@hotmail.com'
        ]);

        /*---- Clientes ----*/
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('clientes')->insert([
                'estado'        => 1,
                'nombre'        => $faker->name,
                'apellido'      => $faker->lastName,
                'email'         => $faker->email,
                'telefono'      => $faker->phoneNumber,
                'celular'       => $faker->phoneNumber,
                'comentario'    => $faker->paragraph,
                'direccion'     => $faker->address
            ]);
        }
    }
}
