<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Civil;

class CivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado_civiles = ['Soltero(A)', 'Casado(A)', 'Divorciado(A)', 'Viudo(A)'];

        foreach ($estado_civiles as $estado_civil) {
            Civil::create([
                'name' => $estado_civil
            ]);
        }
    }
}
