<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReportController extends Controller
{

    /**
     * Show the application dashboard.
     */
    public function index(): View
    {
        return view('dashboards.customer.pages.reports.index');
    }
}
