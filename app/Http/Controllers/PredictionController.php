<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\DiseaseSymptom;
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
        // dd($symptomIds);
        $dInput['description'] = $request->disease;
        // dd($request->all());
        // check if the disease exist
        $existDisease = Disease::where('description', $request->disease)->first();
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
            $input['symptom_id'] = $symp;
            $saveRecord = DiseaseSymptom::create($input);
        }

        return redirect()->back()->with('success', 'Record saved successfully.');
    }

    public function predictedDiseases(Request $request){
        $input = $request->all();
        $generalpredictedDiseases = DiseaseSymptom::whereIn('symptom_id', $request->data)->get();
        if(!empty($generalpredictedDiseases)){          
        $symptomIds= $request->data;
        // Fetch the disease records based on the selected symptoms
        $predictedDiseases = Disease::whereHas('symptoms', function ($query) use ($symptomIds) {
            $query->whereIn('symptom_id', $symptomIds);
        })->groupBy()->get();


        // Calculate the matching symptom counts for each disease
        foreach ($predictedDiseases as $disease) {
            $matchingSymptoms = $disease->symptoms->whereIn('id', $symptomIds)->count();
            $diseaseScores[$disease->id] = $matchingSymptoms;
            
        }
        
        // Sort the diseases based on the matching symptom counts (highest to lowest)
    arsort($diseaseScores);
    // Retrieve the diseases in the ranked order
        $diseasesArray=[];
    foreach (array_keys($diseaseScores) as $key => $dID) {
      $thisDisease=  Disease::where('id', $dID)->first();
      array_push($diseasesArray,$thisDisease);
    }
        $predictedDisease = $diseasesArray[0];
        return response()->json(
            [
                "status" => "success",
                "message" => "Disease predicted successfully!",
                "data" => $predictedDisease
            ],201       
        );
        }else{
            return response()->json(
                [
                    "status" => "Failed",
                    "message" => "No disease predicted",
                    "data" => null
                ],401        
            );
        }

    }
}
