<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var array
     * 
     */
    protected $fillable = [
        'fname',
        'lname',
    ];

    public function record()
    {
        return $this->hasMany(Record::class);
    }
}
