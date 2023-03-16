<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class CreatePatientRequestData extends Data
{
    public function __construct(
        public string $name,
        public string $mother_name,
        public string $date_of_birth,
        public string $cpf,
        public string $cns,
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
        ];
    }
}
