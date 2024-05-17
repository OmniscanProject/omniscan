<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnalyzeRequest;
use App\Http\Resources\AnalyzeResource;
use App\Classes\ApiResponseClass as ResponseClass;
use Illuminate\Support\Facades\Artisan;


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
        $url = $request->input("url");
        Artisan::call('python:run-script', ['url' => $url]);
        $output = Artisan::output();
        
        $data = [
            "score" => substr($output, strpos($output, "Security score:") + strlen("Security score:"), 1),
            "url" => substr($output, strpos($output, "Scanning:") + strlen("Scanning:"), strpos($output, "\n", strpos($output, "Scanning:")) - (strpos($output, "Scanning:") + strlen("Scanning:")))
        ];

        return ResponseClass::sendResponse($data,trans('messages.api.scripts.analyze'),200, false);
    }
}
