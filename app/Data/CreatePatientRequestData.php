<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class CreatePatientRequestData extends Data
{
    public function __construct(
        public string $name,
        public string $mother_name,
        public string $date_of_birth,
        public string $cpf,
        public string $cns,
    )
    {
    }
}
