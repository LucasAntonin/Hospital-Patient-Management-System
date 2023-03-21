<?php

namespace App\Actions\Patient;

use App\Data\CreatePatientRequestData;
use App\Models\Patient;
use Illuminate\Support\Facades\Cache;

class DeletePatientAction
{
    public function execute(Patient $patient)
    {
        $patient->delete();
        Cache::forget('patients');
        return true;
    }
}
