<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\AdminUser;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\AdminUserRequest;

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

    public function create()
    {
        $roles = Role::where('name','!=', 'customer')->get();

        return view('dashboards.admin.pages.users.show', ['roles' => $roles]);
    }

    /**
     * Store a new flight in the database.
     */
    public function store(AdminUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
 
        try {
            $adminUser = AdminUser::create([
                'role_id' => $validated['role'],
                'lastname' => $validated['lastname'],
                'firstname' => $validated['firstname'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]);

            return redirect()->route('admin.dashboard.users.index')->with('success', 'admin user created');

            $adminUser->save();

        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.users.index')->with('error', 'admin user not created');
        }
    }


    /**
     * Update the user's password.
     */
    public function update(AdminUserRequest $request, $id): RedirectResponse
    {
        $adminUser = AdminUser::find($id);

        try {
            $validated = $request->validated();

            $adminUser->role_id = $validated['role'];
            $adminUser->lastname = $validated['lastname'];
            $adminUser->firstname = $validated['firstname'];
            $adminUser->username = $validated['username'];
            $adminUser->email = $validated['email'];
            $adminUser->password = Hash::make($validated['password']);

            return redirect()->route('admin.dashboard.users.index')->with('success', 'admin user updated');

            $adminUser->save();
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.users.index')->with('error', 'admin user not updated');
        }

        // session()->flash('message', 'Post successfully updated.');

    }

    public function show($id)
    {
      $adminUser = AdminUser::find($id);
      $roles = Role::all() ?? [];

      return view('dashboards.admin.pages.users.show', ['adminUser' => $adminUser, 'roles' => $roles]);
    }

    public function destroy($id)
    {
      $adminUser = AdminUser::find($id);
      
      try {
          $adminUser->delete();

          return redirect()->route('admin.dashboard.users.index')->with('success', 'admin user removed');
          
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.users.index')->with('error', 'admin user not removed');
      }

    }

}
