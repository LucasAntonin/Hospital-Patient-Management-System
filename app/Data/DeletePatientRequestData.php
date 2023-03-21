<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class DeletePatientRequestData extends Data
{
    public function __construct(
        public string $id,
    )
    {
    }
}
