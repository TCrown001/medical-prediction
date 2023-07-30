<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\DiseaseSypmtom;
use App\Models\Symptom;
use Illuminate\Http\Request;

class PredictionController extends Controller
{
    public function symptomprediction()
    {
        $data['symptoms'] = Symptom::all();

        return view('prediction.index', $data);
    }

    public function disease_index()
    {
        $data['diseases'] = Disease::all();
        $data['symptoms'] = Symptom::all();

        return view('disease.index', $data);
    }

    public function save_disease(Request $request)
    {
        $symptomIds = $request->symptoms_ids;
        $dInput['description'] = $request->disease;
        // dd($request->all());
        // check if the disease exist
        $existDisease = Disease::where('descriprtion', $request->disease)->first();
        if ($existDisease) {
            $disease_id = $existDisease->id;
        } else {
            $saveDisease = Disease::create($dInput);
            $disease_id = $saveDisease->id;
        }
        // dd($symptomIds);
        foreach ($symptomIds as $key => $symp) {
            // code...
            $input['disease_id'] = $disease_id;
            $input['symptoms_id'] = $symp;
            $saveRecord = DiseaseSypmtom::create($input);
        }

        return redirect()->back()->with('success', 'Record saved successfully.');
    }
}
