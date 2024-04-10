<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClinicController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\FitController;
use App\Http\Controllers\Api\InfantController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\XrayController;
use Illuminate\Support\Facades\Route;

Route::prefix('doctor')->group(function () {
    Route::post('/login', [AuthController::class, 'doctorLogin']);
});

Route::prefix('patient')->group(function () {
    Route::post('/login', [AuthController::class, 'patientLogin']);
});

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::post('/logout', [AuthController::class, 'logout']);

Route::prefix('fitness')->group(function () {
    Route::get('/fit', [FitController::class, 'index']);
    Route::get('/fit/{id}', [FitController::class, 'show']);
    Route::get('/program', [FitController::class, 'indexProgram']);
    Route::get('/program/{fitId}', [FitController::class, 'fitDetailsById']);
});

Route::prefix('clinics')->group(function () {
    Route::get('/', [ClinicController::class, 'index']);
    Route::get('/{clinicId}', [ClinicController::class, 'getClinicDetails']);
});

Route::prefix('doctor')->group(function () {
    Route::get('/', [DoctorController::class, 'index']);
    Route::get('/{id}', [DoctorController::class, 'show']);
    Route::get('/{id}/patients', [DoctorController::class, 'showPatients']);
});

Route::get('/test/main', [TestController::class, 'index']);

Route::prefix('test')->group(function () {
    Route::get('/', [TestController::class, 'mainTest']);
    Route::get('/{id}', [TestController::class, 'testById']);
    Route::post('/book', [TestController::class, 'bookTest']);
});

Route::prefix('xray')->group(function () {
    Route::get('/', [XrayController::class, 'index']);
    Route::get('/{id}', [XrayController::class, 'xrayById']);
    Route::post('/book', [XrayController::class, 'bookXray']);
});

Route::post('/Infant',[InfantController::class,'store']);


});