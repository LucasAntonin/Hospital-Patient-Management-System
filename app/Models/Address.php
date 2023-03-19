<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'endereco',
        'bairro',
        'complemento',
        'numero',
        'estado',
        'cidade',
        'patient_id'
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(
            Patient::class,
            'patient_id'
        );
    }
}
