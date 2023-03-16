<?php

namespace App\Actions\Patient;

use App\Data\CreatePatientRequestData;
use App\Models\Patient;

class CreatePatientAction
{
    public function execute(CreatePatientRequestData $requestData)
    {
        return Patient::create(
            $requestData->toArray()
        );
    }
}


