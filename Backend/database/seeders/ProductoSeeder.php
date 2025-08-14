<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a la tabla
        DB::table('productos')->insert([
            [
                'nombre_producto' => 'Papel Ecológico',
                'descripcion' => 'Resma de papel reciclado tamño carta - paquete de 500 hojas',
                'precio' => 31.00,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_producto' => 'Papel Ecológico',
                'descripcion' => 'Resma de papel reciclado tamño oficio - paquete de 500 hojas',
                'precio' => 33.00,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_producto' => 'Papel Ecológico',
                'descripcion' => 'Resma de papel reciclado tamño A4 - paquete de 500 hojas',
                'precio' => 32.00,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_producto' => 'Agenda de papel reciclado Tamaño 1/2 carta',
                'descripcion' => 'Tapa dura, anillado, de 100 hojas',
                'precio' => 19.00,
                'stock' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_producto' => 'Agenda de papel reciclado Tamaño 1/4 carta',
                'descripcion' => 'Tapa dura, anillado, de 100 hojas',
                'precio' => 12.00,
                'stock' => 400,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
