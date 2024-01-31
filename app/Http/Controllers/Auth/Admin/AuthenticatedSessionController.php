<?php
namespace App\Http\Controllers\Auth\Admin;

use Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Admin\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.admin.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
            $validated = $request->validated();

            $request->authenticate();

            $request->session()->regenerate();

            // dd(redirect()->route(RouteServiceProvider::ADMIN_DASHBOARD));
        return redirect()->route(RouteServiceProvider::ADMIN_DASHBOARD);
    }

    /**
     * Destroy an authenticated session.
    */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        return redirect()->route('auth.admin.login');
    }
}