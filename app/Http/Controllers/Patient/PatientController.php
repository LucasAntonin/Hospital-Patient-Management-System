<?php

namespace App\Http\Controllers\Patient;

use App\Actions\Patient\CreatePatientAction;
use App\Actions\Patient\DeletePatientAction;
use App\Actions\Patient\EditPatientAction;
use App\Actions\Patient\ListPatientAction;
use App\Data\CreatePatientRequestData;
use App\Data\EditPatientRequestData;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ListPatientAction $action)
    {
        $patients = $action->execute();
        return inertia('Patients/Index',
            $patients
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Patients/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePatientRequestData $requestData, CreatePatientAction $action)
    {
        $action->execute($requestData);

        return redirect()->route('patients.index')
            ->with('success', 'Paciente foi registrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::with('address')->findOrFail($id);

        return inertia('Patients/Show', [
            'patient' => $patient,
            'address' => $patient->address,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::with('address')->findOrFail($id);

        return inertia('Patients/Edit', [
            'patient' => $patient,
            'address' => $patient->address,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditPatientRequestData $requestData, EditPatientAction $action, Patient $patient)
    {
        $action->execute($requestData, $patient);

        return redirect()->route('patients.index')
            ->with('success', 'Paciente foi atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeletePatientAction $action, Patient $patient)
    {
        $action->execute($patient);
        return redirect()->route('patients.index')
            ->with('success', 'Paciente foi excluído!');
    }
}
