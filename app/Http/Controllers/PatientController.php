<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Exports\PatientsExport;
use App\Http\Livewire\PatientTable;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PatientController extends Controller
{
    public function index()
    {
        // $patients = Patient::all();
        $patients = Patient::all();
        return view('patients/index', ['patients' => $patients]);
    }

    /**
     * @return BinaryFileResponse
     */
    public function export()
    {
        return Excel::download(new PatientsExport(), 'patients.csv');
    }
}
