<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'mother_name',
        'date_of_birth',
        'cpf',
        'cns',
    ];

    public function Address(): HasOne
    {
        return $this->hasOne(
            Address::class,
            'patient_id'
        );
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($patient) {
            $patient->address()->delete();
        });
    }
}
