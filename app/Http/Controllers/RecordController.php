<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class RecordController extends Controller
{
    public function create(Record $record)
    {
        $rules = array(
            'patient_id',
            'pressure'
        );

        request()->validate($rules);

        $record = new Record;
        // $record->getId(request()); # future change to search by name or byid
        $record->patient_id = request()->patient_id;
        $record->pressure = request()->input('pressure');
        $record->recorded_at = now();

        $record->save();

        Session::flash('message', 'Successfully created section');
        return view('patients/index');
    }
}
