<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SolicitudImport;

class SolicitudSeeder extends Seeder
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
