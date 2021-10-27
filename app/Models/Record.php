<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Patient;

class Record extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'pressure',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'recorded_at' => 'datetime'
    ];

    public function getId(Request $request)
    {
        if (Patient::select('id')->whereColumn('id', $request->patient_id)) {
            return $request->input('patient_id');
        } else {
            return Patient::select(
                Record::select('patient_id')->whereColumn($request->input('fname') + $request->input('lname'), 'patients.fname' + 'patients.lname')
            )->get();
        }
    }
}
