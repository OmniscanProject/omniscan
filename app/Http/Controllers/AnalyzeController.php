<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AnalyzeRequest;

class AnalyzeController extends Controller
{
    public function show()
    {
        return view('pages.free-analyze-results');
    }
}