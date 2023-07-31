<?php

namespace App\Http\Controllers;

use App\Models\User;

class PatientController extends Controller
{
    public function patientlist()
    {
        $data['users'] = User::all();

        return view('patient.index', $data);
    }
}
