<?php

namespace App\Actions\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;

class CreatePatientAction
{
    public function execute(Request $request)
    {
        return Patient::create(
            $request->validate([
                'name' => 'required|min:2|max:40',
                'mother_name' => 'required|min:2|max:40',
                'date_of_birth' => 'required',
                'cpf' => 'required',
                'cns' => 'required',
            ])
        );
    }
}


