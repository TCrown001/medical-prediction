<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
    public function doctor()
    {
        $data['doctors'] = Doctor::all();

        return view('doctor.index', $data);
    }

    // to save doctor into database
    public function save_doctor(Request $request)
    {
        $input = $request->all();
        $input = Doctor::create($request->all());
        // $input->save();
        return redirect()->back()->with('success', 'Doctor created successfully');
    }

    public function delete_doctor(Request $request)
    {
        $id = $request->id;
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
