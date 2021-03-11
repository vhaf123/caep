<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PrestamosImport;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new PrestamosImport, 'prestamos.csv', 'local');
    }
}
