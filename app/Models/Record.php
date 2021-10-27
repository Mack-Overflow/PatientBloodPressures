<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
