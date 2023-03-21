<?php

namespace App\Actions\Patient;

use App\Data\EditPatientRequestData;
use App\Models\Patient;
use Illuminate\Support\Facades\Cache;

class EditPatientAction
{
    public function execute(EditPatientRequestData $requestData, Patient $patient)
    {
        $patient->update([
            'name' => $requestData->name,
            'mother_name' => $requestData->mother_name,
            'date_of_birth' => $requestData->date_of_birth,
            'cpf' => $requestData->cpf,
            'cns' => $requestData->cns,
        ]);

        $patient->address->update([
            'cep' => $requestData->cep,
            'endereco' => $requestData->endereco,
            'bairro' => $requestData->bairro,
            'complemento' => $requestData->complemento,
            'numero' => $requestData->numero,
            'estado' => $requestData->estado,
            'cidade' => $requestData->cidade,
        ]);
        Cache::forget('patients');
    }
}


