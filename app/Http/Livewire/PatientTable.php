<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use App\Models\Patient;
use App\Models\Record;

// https://www.tutsmake.com/laravel-8-livewire-datatables-tutorial-example/
// https://livewire-datatables.com/complex to use relationships between Patient, Record
// composer require mediconesystems/livewire-datatables
class PatientTable extends LivewireDatatable
{

    /**
     * Write code on method
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('Patient ID')
                ->sortBy('id'),

            Column::name('fname')
                ->label('First Name'),

            Column::name('lname')
                ->label('Last Name'),

            NumberColumn::name('records.pressure')
                ->label('Blood Pressure')
        ];
    }

    public function builder()
    {
        return Patient::query()->leftJoin('records', 'records.patient_id', 'patients.id');
    }
}
