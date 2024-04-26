<?php

use App\Http\Controllers\DoctorWebController;
use App\Http\Controllers\PatientWebController;
use App\Http\Controllers\TemplateWebController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TemplateWebController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

    Route::group(['middleware'=>['auth:sanctum','limit.request']],function(){

    Route::match(['get', 'post'], '/home', [TemplateWebController::class, 'index'])->name('dashpord');
    Route::get('/addpatient', [TemplateWebController::class,'add_patient'])->name('addpatient');
    Route::get('/adddoctor', [TemplateWebController::class,'add_doctor'])->name('addDoctor');
    Route::get('/all-patient', [TemplateWebController::class,'all_patient'])->name('All_Patient');
    Route::get('/all-doctor', [TemplateWebController::class,'all_doctor'])->name('All_Doctor');
    Route::post('/patients/delete', [PatientWebController::class, 'delete'])->name('patients.delete');
    Route::post('/doctors/delete', [DoctorWebController::class, 'delete'])->name('doctors.delete');
    Route::post('/doctors/store', [DoctorWebController::class, 'store'])->name('doctors.store');
    Route::post('/patients/store', [PatientWebController::class, 'store'])->name('patients.store');
    Route::get('/patient/{doctor_id}', [PatientWebController::class, 'show'])->name('patients.show');
});


 


require __DIR__.'/auth.php';
