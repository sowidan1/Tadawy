<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Patient;


class TemplateWebController extends Controller
{
    public function add_doctor()
    {
            $clinics = Clinic::all();

            return view('addDoctor', compact('clinics'));

    }

    public function add_patient(){

        $doctors = Doctor::all();

        return view('addpatient',compact('doctors'));
    }

    public function all_patient(){

        $patients = Patient::all();

        return view('allPatient',compact('patients'));
    }

    public function all_doctor(){

        $doctors = Doctor::all();

        return view('allDoctor',compact('doctors'));
    }
}

