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
        return Patient::select('patients.id', 'patients.fname', 'patients.lname', 'records.pressure', 'records.recorded_at')
            ->leftJoin('records', 'records.patient_id', 'patients.id')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Patient Id #',
            'First Name',
            'Last Name',
            'Blood Pressure',
            'Recorded Date'
        ];
    }
}
