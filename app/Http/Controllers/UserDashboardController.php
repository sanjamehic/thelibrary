<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserDashboardController extends Controller
{
    //User Dashboard
    public function index() {
        return view('admin.user-dashboard');
    }

    //Edit user - edit view
    public function edit(User $user) {
        return view('admin.user-edit', ['user' => $user]);
    }

    //Edit user - update
    public function update(User $user) {

        $attributes = request()->validate([
            'name'  => 'required',
            'username'  => 'required|min:5|max:255',
            'email'  => 'required|email',
        ]);

        $user->update($attributes);

        return redirect('/admin/users');
    }

    //Delete user
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/users');
    }
}

