<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages.user.role.index');
   }

    public function data(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        return response()->json(Role::paginate($perPage));
    }

    public function search(Request $request)
    {
        $search = Role::where('name', 'like', '%'. $request->search . '%')->get();
        return response()->json($search);
    }

    public function store(RoleRequest $request)
    {
        return response()->json(Role::create($request->validated()));
    }

    public function edit(Role $role)
    {
        return response()->json($role);
    }

    public function update(RoleRequest $request, Role $role)
    {
        return response()->json($role->update($request->validated()));
    }

    public function destroy(Role $role)
    {
        return response()->json($role->delete());
    }
}
