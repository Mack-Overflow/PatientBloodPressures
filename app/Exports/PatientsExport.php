<?php

namespace App\Exports;

use App\Models\Record;
use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;

// https://medium.com/maatwebsite/supercharge-your-excel-exports-in-laravel-eb9f74395995
class PatientsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Patient::select(
            Record::select('pressure')->whereColumn('patent_id', 'patients.id')
                ->orderByDesc('recorded_at')
        )->get();
    }

    public function headings()
    {
        //
    }
}
