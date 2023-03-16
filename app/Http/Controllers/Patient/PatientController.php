<?php

namespace App\Http\Controllers\Patient;

use App\Actions\Patient\CreatePatientAction;
use App\Actions\Patient\ListPatientAction;
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
    public function store(CreatePatientAction $action)
    {
        $action->execute();

        return redirect()->route('index')
            ->with('success', 'Paciente foi registrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
