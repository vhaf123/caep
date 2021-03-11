<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SolicitudImport;
use App\Imports\ImponentePrestamoImport;

class ImponentePrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new SolicitudImport, 'imponentePrestamo.csv', 'local');
    }
}
