<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class EditPatientRequestData extends Data
{
    public function __construct(
        public string $name,
        public string $mother_name,
        public string $date_of_birth,
        public string $cpf,
        public string $cns,
        public string $cep,
        public string $endereco,
        public string $bairro,
        public string $complemento,
        public string $numero,
        public string $estado,
        public string $cidade,
    )
    {
    }

    public static function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:40'],
            'mother_name' => ['required', 'min:2', 'max:40'],
            'date_of_birth' => ['required'],
            'cpf' => ['required', 'cpf'],
            'cns' => ['required', 'cns'],
            'cep' => ['required'],
            'endereco' => ['required'],
            'bairro' => ['required'],
            'complemento' => ['required'],
            'numero' => ['required'],
            'estado' => ['required'],
            'cidade' => ['required'],
        ];
    }

    public static function messages(): array
    {
        return [
            'name.*' => 'Nome Muito Curto',
            'mother_name.*' => 'Nome Muito Curto',
            'date_of_birth.*' => 'Data Invalida',
            'cpf.*' => 'Cpf Invalido',
            'cns.*' => 'Cns Invalido',
            'cep.*' => 'Cep Invalido',
            'endereco.*' => 'Endereço Invalido',
            'bairro.*' => 'Bairro Invalido',
            'numero.*' => 'Numero Invalido',
            'estado.*' => 'Estado Invalido',
            'cidade.*' => 'Cidade Invalida',
        ];
    }
}
