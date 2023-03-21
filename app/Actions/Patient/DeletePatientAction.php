<?php

namespace App\Actions\Patient;

use App\Data\CreatePatientRequestData;
use App\Models\Patient;

class DeletePatientAction
{
    public function execute(Patient $patient)
    {
        $patient->delete();
        return true;
    }
}
