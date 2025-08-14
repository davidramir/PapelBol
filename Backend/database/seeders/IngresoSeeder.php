<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar Registros en la tabla
        DB::table('ingresos')->insert([
            [
                'cantidad' => 50,
                'total' => 150,
                'created_at' => now(),
                'updated_at' => now(),
                'producto_id' => 1
            ],
            [
                'cantidad' => 100,
                'total' => 200,
                'created_at' => now(),
                'updated_at' => now(),
                'producto_id' => 3
            ],
            [
                'cantidad' => 50,
                'total' => 250,
                'created_at' => now(),
                'updated_at' => now(),
                'producto_id' => 4
            ],
        ]);
    }
}