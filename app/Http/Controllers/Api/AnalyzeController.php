<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\AnalyzeRequest;

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
    }

    
}
