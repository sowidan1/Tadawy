<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Patient;


class TemplateWebController extends Controller
{
    public function index()
    {
        $allPatients = Patient::count();
        $allDoctors = Doctor::count();
        $allClinics = Clinic::paginate(6);
        return view('master' , compact('allPatients','allDoctors' , 'allClinics'));
    }
    public function add_doctor()
    {
            $clinics = Clinic::all();

            return view('addDoctor', compact('clinics'));

    }

    public function add_patient(){

        $clinics = Clinic::all();

        $doctors = Doctor::all();

        return view('addpatient',compact('doctors','clinics'));
    }

    public function all_patient(){

        $patients = Patient::paginate(10);

        return view('allPatient',['patients' => $patients]);
    }

    public function all_doctor(){
        $doctors = Doctor::paginate(10);
        return view('allDoctor', ['doctors' => $doctors]);
    }
}

