<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fit;
use App\Models\Fit_program;
use App\Models\Fit_program_details;
use Illuminate\Http\Request;

class FitController extends Controller
{
    public function index()
    {
        $fit = Fit::select('id','name', 'photo')->get();

        return $fit;
    }

    public function show($id)
    {
        $fit = Fit::find($id);

        return $fit;
    }

    public function indexProgram()
    {
        $fit = Fit_program::select('id','name', 'photo')->get();

        return $fit;
    }

    public function fitDetailsById($fitId)
    {
        $fit = Fit_program_details::where('fit_program_id', $fitId)->get();

        return $fit;
    }
}
