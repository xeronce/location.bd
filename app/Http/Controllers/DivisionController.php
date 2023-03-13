<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function getList() : JsonResponse {
        $returned_data = [];
        return response()->json($returned_data);
    }
}
