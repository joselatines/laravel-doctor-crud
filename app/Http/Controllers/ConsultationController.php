<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Http\Requests\ConsultationRequest;
use App\Models\Patient;

/**
 * Class ConsultationController
 * @package App\Http\Controllers
 */
class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultations = Consultation::with('patient')->orderBy('updated_at', 'desc')->orderBy('date', 'desc')->paginate(10); // Eager load the 'patient' relationship
        $patients = Patient::all();

        return view('consultation.index', ['consultations' => $consultations, 'patients' => $patients])
        ->with('i', (request()->input('page', 1) - 1) * $consultations->perPage());
    }

 
    public function create()
    {
        $consultation = new Consultation();
        $patients = Patient::all();
        return view('consultation.create',  ['consultation' => $consultation, 'patients' => $patients]);
    }

    public function store(ConsultationRequest $request)
    {
        Consultation::create($request->validated());

        return redirect()->route('consultations.index')
            ->with('success', 'Consulta creada');
    }

    public function show($id)
    {
        $consultation = Consultation::find($id);
        $patient = Patient::find($consultation->patient_id);

        return view('consultation.show', compact('consultation', 'patient'));
    }


    public function edit($id)
    {
        $consultation = Consultation::find($id);
        $patients = Patient::all();
        return view('consultation.create',  ['consultation' => $consultation, 'patients' => $patients]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConsultationRequest $request, Consultation $consultation)
    {
        $consultation->update($request->validated());

        return redirect()->route('consultations.index')
            ->with('success', 'Consulta editada');
    }

    public function destroy($id)
    {
        Consultation::find($id)->delete();

        return redirect()->route('consultations.index')
            ->with('success', 'Consulta eliminada');
    }
}
