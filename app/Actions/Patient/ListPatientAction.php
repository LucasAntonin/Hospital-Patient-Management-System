<?php

namespace App\Actions\Patient;

use App\Models\Patient;
use Illuminate\Support\Facades\Cache;

class ListPatientAction
{
    public function execute()
    {
        return Cache::remember('patients', now()->addMinutes(15), function () {
            return ['patients' => Patient::orderBy('name')->get()];
        });
    }
}


