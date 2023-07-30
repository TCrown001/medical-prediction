<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function symptoms()
    {
        $data['symptoms'] = Symptom::all();

        return view('symptoms.index', $data);
    }

    public function save_symptoms(Request $request)
    {
        $input = $request->all();
        $input = Symptom::create($request->all());
        // $input->save();
        return redirect()->back()->with('success', 'Patient created successfully');
    }

    public function delete_symptom(Request $request)
    {
        $id = $request->id;
        $symptom = Symptom::find($id);
        $symptom->delete();

        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
