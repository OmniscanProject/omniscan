<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
     /**
     * Show the application dashboard.
     *
     */
    public function index(): View
    {
      return view('dashboards.admin.pages.customers.list');
    }
}
