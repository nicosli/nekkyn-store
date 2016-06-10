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
            'email'    => 'nnavarrete@devcomer.com',
            'password' => bcrypt('tamales'),
            'avatar'   => 'https://graph.facebook.com/v2.6/1396397923710124/picture?type=normal',
            'estado'   => 1,
            'idSocial' => '1396397923710124'
        ]);

        DB::table('users')->insert([
            'name'     => 'Abril Rosado Huerta',
            'nickname' => 'lirba',
            'email'    => 'arosado@devcomer.com',
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

        $faker = Faker::create();

        /*---- Proveedores ----*/
        foreach(range(1,10) as $index){
            DB::table('proveedores')->insert([
                'estado'            => 1,
                'nombre'            => $faker->company,
                'representante'     => $faker->name,
                'telefono'          => $faker->phoneNumber,
                'email'             => $faker->email,
                'direccion'         => $faker->address
            ]);
        }

        /*---- Tallas ----*/
        foreach(range(18,46) as $index){
            if($index % 2 == 0){
                DB::table('tallas')->insert([
                    'estado' => 1,
                    'nombre' => $index,
                    'descripcion' => 'talla '.$index 
                ]);                       
            }
        }        

        /*---- Clientes ----*/
        foreach (range(1,80) as $index) {
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

        /*---- Productos ----*/
        $categorias = DB::table('categorias')->get();
        $colores = DB::table('colores')->get();
        $proveedores = DB::table('proveedores')->get();
        $tallas = DB::table('tallas')->get();
        $productos = array(
            "Huipil encaje",
            "Huayma Reilete",
            "Guayabera Deshilada Tekit",
            "Vestido Despunte",
            "Vestido Merida",
            "Camisa tekit combinada",
            "Vestido itzayana",
            "Camisa Chino",
            "Huayma Matizado",
            "Blusa Frida",
            "Vestido Georgina",
            "Blusa Araña",
            "Guayabera combinada de Dama",
            "Blusa Mestiza",
            "Blusa bolitas",
            "Blusa tekit",
            "Blusa espiga",
            "Blusa Citilcum",
            "Guayabera Niño",
            "Pantalón"
        );

        foreach(range(0,count($productos)-1) as $index){
            $costo = rand(150, 800);
            $precio_publico = $costo * 2;
            DB::table('productos')->insert([
                'estado'            => 1,
                'nombre'            => $productos[$index],
                'categoria_id'      => $categorias[rand(0, count($categorias)-1)]->id,
                'color_id'          => $colores[rand(0, count($colores)-1)]->id,
                'proveedor_id'      => $proveedores[rand(0, count($proveedores)-1)]->id,
                'talla_id'          => $tallas[rand(0, count($tallas)-1)]->id,
                'existencia'        => rand(20, 50),
                'costo'             => $costo,
                'precio_publico'    => $precio_publico,
                'descripcion'       => $faker->paragraph,
                'barcode'           => $faker->ean13
            ]);
        }
    }
}
