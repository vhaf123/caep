<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Cheque;

class ChequeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = ['Retiro en santiago', 'Domicilio particular', 'Domicilio comercial', 'Agencia de'];

        foreach ($datos as $dato) {
            Cheque::create([
                'name' => $dato
            ]);
        }
    }
}
