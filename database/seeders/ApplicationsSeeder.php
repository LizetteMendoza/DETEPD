<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            'nombre' => 'Lizette Victoria Mendoza Ornelas',
            'curp'=> 'MEOL921209MJCNRZ08',
            'direccion' => "Allende 122 colonia centro",
            'imf' => '10000',
            'edad'=> 19,
            'telefono' =>3311906632,
            'sexo'=>'mujer',
            'limitacion' => 'ninguna',
            'escolaridad' => 'licenciatura',
            'plantel' => 'CUALTOS',
            'etnia'=> 'N/A',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('applications')->insert([
            'nombre' => 'Maciasl Luna Pedro Daniel',
            'curp'=> 'MLPD901022HJCNRZ01',
            'direccion' => "Rio Santiago 324",
            'imf' => '8000',
            'edad'=> 17,
            'telefono' =>3310966543,
            'sexo'=>'hombre',
            'limitacion' => 'motriz',
            'escolaridad' => 'licenciatura',
            'plantel' => 'CUCEI',
            'etnia'=> 'N/A',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('applications')->insert([
            'nombre' => 'Gonzalez Fernandez Diego Santiago',
            'curp'=> 'GFDS881207HJCNRZ08',
            'direccion' => "San pedro 256",
            'imf' => '10000',
            'edad'=> 22,
            'telefono' =>3781097756,
            'sexo'=>'hombre',
            'limitacion' => 'auditiva',
            'escolaridad' => 'licenciatura',
            'plantel' => 'CUCEA',
            'etnia'=> 'N/A',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
