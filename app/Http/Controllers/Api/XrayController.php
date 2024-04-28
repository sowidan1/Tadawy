<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookXrayRequest;
use App\Models\Book_xray;
use App\Models\Xray;

class XrayController extends Controller
{
    public function index()
    {
        $xrays = Xray::all();

        return $xrays;
    }

    public function xrayById($id)
    {
        $xray = Xray::find($id);

        $response = [
            'xray' => $xray,
            'message' => 'Xray fetched successfully',
            'status' => 200
        ];

        return $response;
    }

    public function bookXray(BookXrayRequest $request)
    {
        $data = $request->validated();

        $book = Book_xray::create($data);

        $response = [
            'book' => $book,
            'message' => 'xray booked successfully',
            'status' => 200
        ];
        
        return $response;
    }
}
