<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Http\Requests\ConsultationRequest;

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
        $consultations = Consultation::paginate();

        return view('consultation.index', compact('consultations'))
            ->with('i', (request()->input('page', 1) - 1) * $consultations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consultation = new Consultation();
        return view('consultation.create', compact('consultation'));
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

        return view('consultation.show', compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $consultation = Consultation::find($id);

        return view('consultation.edit', compact('consultation'));
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
