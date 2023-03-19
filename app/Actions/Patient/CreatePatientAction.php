<?php

namespace App\Actions\Patient;

use App\Data\CreatePatientRequestData;
use App\Models\Address;
use App\Models\Patient;

class CreatePatientAction
{
    public function execute(CreatePatientRequestData $requestData)
    {
        $patient = Patient::create([
            'name' => $requestData->name,
            'mother_name' => $requestData->mother_name,
            'date_of_birth' => $requestData->date_of_birth,
            'cpf' => $requestData->cpf,
            'cns' => $requestData->cns,
        ]);

        $address = Address::create([
            'cep' => $requestData->cep,
            'endereco' => $requestData->endereco,
            'bairro' => $requestData->bairro,
            'complemento' => $requestData->complemento,
            'numero' => $requestData->numero,
            'estado' => $requestData->estado,
            'cidade' => $requestData->cidade,
            'patient_id' => $patient->id,
        ]);

        return CreatePatientRequestData::validate([
            'name' => $requestData->name,
            'mother_name' => $requestData->mother_name,
            'date_of_birth' => $requestData->date_of_birth,
            'cpf' => $requestData->cpf,
            'cns' => $requestData->cns,
            'cep' => $requestData->cep,
            'endereco' => $requestData->endereco,
            'bairro' => $requestData->bairro,
            'complemento' => $requestData->complemento,
            'numero' => $requestData->numero,
            'estado' => $requestData->estado,
            'cidade' => $requestData->cidade,
            'patient_id' => $patient->id,
        ]);
    }
}


