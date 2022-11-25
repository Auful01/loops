<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::create($request->all());

        return redirect(route('home'));
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user->update($request->all());

        return redirect(route('home'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('home'));
    }
}
