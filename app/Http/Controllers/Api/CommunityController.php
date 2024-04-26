<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Patient;
use App\Models\Question;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function storeQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'patient_id' => 'required|integer|exists:patients,id'
        ]);

        $question = Question::create($request->all());

        $response = [
            'status' => 201,
            'data' => $question,
            'message' => 'Question created successfully'
        ];

        return response()->json($response, 201);

    }

    public function showNotAnswerQuestions()
    {
        $questions = Question::whereNull('answer')->with('patient')->get();

        $response = [
            'questions' => $questions,
            'message' => 'Unanswered questions fetched successfully',
            'status' => 200
        ];

        return response()->json($response, 200);
    }


    public function showQuestion($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        $response = [
            'question' => $question,
            'message' => 'Question fetched successfully',
            'status' => 200
        ];

        return response()->json($response, 200);
    }


    public function answer(Request $request, $id)
    {
        $request->validate([
            'answer' => 'string',
            'doctor_id' => 'exists:doctors,id'
        ]);

        $question = Question::find($id);

            if(!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }
        
        Question::where('id', $id)->update($request->all());

        $response = [
            'status' => 200,
            'data' => $question,
            'message' => 'Question answered successfully'
        ];

        return response()->json($response, 200);
    }

    public function AnsweredQuestions(){
        $questions = Question::whereNotNull('answer')->with('doctor')->get();

        $response = [
            'questions' => $questions,
            'message' => 'Answered questions fetched successfully',
            'status' => 200
        ];

        return response()->json($response, 200);
    }
    
}
