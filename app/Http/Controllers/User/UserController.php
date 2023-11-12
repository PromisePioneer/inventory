<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user.user.index');
    }

    public function data(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        return response()->json(User::with('roles')->paginate($perPage));
    }

    public function search(Request $request)
    {
        $search = User::with('roles')
                ->where('name', 'like', '%'. $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->get();
        return response()->json($search);
    }

    public function create()
    {
       return view('pages.user.user.create');
    }

    public function roleData()
    {
        return response()->json(Role::all());
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('12345678')
        ]);
        $user->syncRoles($request->input('role'));
        return response()->json($user,200);
    }

    public function edit(User $user)
    {
        return view('pages.user.user.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('12345678')
        ]);
        $user->syncRoles($request->input('role'));
    }

    public function destroy(User $user)
    {
        return response()->json($user->delete());
    }
}
