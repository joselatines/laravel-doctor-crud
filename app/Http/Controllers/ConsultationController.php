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
        $consultations = Consultation::with('patient')->orderBy('updated_at', 'desc')->orderBy('date', 'desc')->paginate(); // Eager load the 'patient' relationship
        $patients = Patient::all();

        return view('consultation.index', ['consultations' => $consultations, 'patients' => $patients])
        ->with('i', (request()->input('page', 1) - 1) * $consultations->perPage());

        // return view('consultation.index', ['consultations' => $consultations, 'patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consultation = new Consultation();
        $patients = Patient::all();
        return view('consultation.create',  ['consultation' => $consultation, 'patients' => $patients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConsultationRequest $request)
    {
        Consultation::create($request->validated());

        return redirect()->route('consultations.index')
            ->with('success', 'Consultation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $consultation = Consultation::find($id);
        $patient = Patient::find($consultation->patient_id);

        return view('consultation.show', compact('consultation', 'patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
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
            ->with('success', 'Consultation updated successfully');
    }

    public function destroy($id)
    {
        Consultation::find($id)->delete();

        return redirect()->route('consultations.index')
            ->with('success', 'Consultation deleted successfully');
    }
}
