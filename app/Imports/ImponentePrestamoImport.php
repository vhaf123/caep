<?php

namespace App\Imports;

use App\Models\ImponentePrestamo;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

use Illuminate\Support\Carbon;

class ImponentePrestamoImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if (!isset($row['imponente_id'])) {
            return null;
        }

        return new ImponentePrestamo([
            'imponente_id' => $row['imponente_id'],
            'prestamo_id' => $row['prestamo_id'],
            'saldos' => $row['saldos'],
            'fecha_cierre' => Carbon::createFromFormat('d/m/Y', $row['fecha_cierre']),
            'monto_cuota' => $row['monto_cuota'],
            'numero_cuotas' => $row['numero_cuotas'],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ";"
        ];
    }
}
