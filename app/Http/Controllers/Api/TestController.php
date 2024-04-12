<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookTestRequest;
use App\Models\Main_test;
use App\Models\Ray_test;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Ray_test::all();

        return response()->json($tests);
    }

    public function mainTest()
    {
        $test = Main_test::all();

        $response = [
            'test' => $test,
            'message' => 'Test fetched successfully',
            'status' => 200
        ];

        return $response; 
    }

    public function testById($id)
    {
        $test = Test::where('main_tests_id', $id)->get();

        $response = [
            'test' => $test,
            'message' => 'Test fetched successfully',
            'status' => 200
        ];

        return $response;
    }

    public function bookTest(BookTestRequest $request)
    {
        $data = $request->validated();

        $book = Test::create($data);

        $response = [
            'book' => $book,
            'message' => 'Test booked successfully',
            'status' => 200
        ];
        
        return $response;
    }
}
