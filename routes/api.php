<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClinicController;
use App\Http\Controllers\Api\CommunityController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\EhrController;
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

Route::group(['middleware' => ['auth:sanctum', 'limit.request']], function () {
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

    Route::post('/infant', [InfantController::class, 'store']);

    Route::prefix('EHR')->group(function () {

        Route::post('/store', [EhrController::class, 'store']);
        Route::get('/show/{id}', [EhrController::class, 'download']);
        Route::get('/all/{patient_id}', [EhrController::class, 'showEhrByPatientId']);
    });

    Route::prefix('community')->group(function () {
        Route::post('/question/store', [CommunityController::class, 'storeQuestion']);
        Route::get('/question/notAnswerd', [CommunityController::class, 'showNotAnswerQuestions']);
        Route::get('/question/notAnswerd/{id}', [CommunityController::class, 'showQuestion']);
        Route::put('/answer/store/{id}', [CommunityController::class, 'answer']);
        Route::get('/question/Answerd', [CommunityController::class, 'AnsweredQuestions']);

    });
});
