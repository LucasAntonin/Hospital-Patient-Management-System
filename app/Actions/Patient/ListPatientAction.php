<?php

namespace App\Actions\Patient;

use App\Models\Patient;

class ListPatientAction
{
    public function execute()
    {
        return ['patients' => Patient::all()];
    }
}


