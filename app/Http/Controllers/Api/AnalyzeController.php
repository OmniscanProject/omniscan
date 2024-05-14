<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnalyzeRequest;
use App\Http\Resources\AnalyzeResource;
use App\Classes\ApiResponseClass as ResponseClass;

class AnalyzeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void 
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function analyze(AnalyzeRequest $request)
    {
        return ResponseClass::sendResponse(null,trans('messages.api.scripts.analyze'),200, false);
    }

    
}
