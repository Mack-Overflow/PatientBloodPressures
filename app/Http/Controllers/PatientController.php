<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Exports\PatientsExport;
use App\Http\Livewire\PatientTable;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PatientController extends Controller
{
    public function login()
    {
        return redirect::to('patients/index');
    }

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
