<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function show(): View
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function update(Request $request, string $id): RedirectResponse | View
    {
        $patient = Patient::findOrFail($id);
        
        if ($request->isMethod('get')) {
            return view('patients.edit', compact('patient'));
        }

        $patient->update([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'note' => $request->input('note'),
        ]);

        return redirect()->route("dashboard.patients")->with("success", "Patient edited");
    }

    public function destroy(String $id)
    {
        $todo = Patient::find($id);
        $todo->delete();

        return redirect()->route("dashboard.patients")->with("success", "Patient deleted successfully");
    }

    public function create(Request $request): RedirectResponse | View
    {
        if ($request->isMethod('get')) {
            return view('patients.create');
        }

        $patient = new Patient();

        $patient->name = $request->input('name');
        $patient->last_name = $request->input('last_name');
        $patient->age = $request->input('age');
        $patient->email = $request->input('email');
        $patient->note = $request->input('note');

        $patient->save();

        return redirect()->route("dashboard.patients")->with("success", "Patient created successfully");
    }
}