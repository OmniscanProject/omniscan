<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): View
    {
        $users = AdminUser::All();

        return view('dashboards.admin.pages.users.list', [
            'users' => $users
        ]);
    }
}
