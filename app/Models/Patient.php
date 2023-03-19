<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;

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
}
