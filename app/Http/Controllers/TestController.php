<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'This is a test response from the Laravel API.',
            'data' => [
                ['id' => 1, 'name' => 'John Doe', 'role' => 'Captain'],
                ['id' => 2, 'name' => 'Jane Smith', 'role' => 'First Officer']
            ]
        ]);
    }
}
