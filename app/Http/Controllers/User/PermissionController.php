<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view('pages.user.permission.index');
    }

    public function data(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        return Permission::paginate($perPage)->toJson();
    }

    public function search(Request $request)
    {
        $search = Permission::where('name', 'like', '%'. $request->search . '%')->get();
        return response()->json($search);
    }

    public function store(PermissionRequest $request)
    {
        return response()->json(Permission::create($request->validated()));
    }

    public function edit(Permission $permission)
    {
        return response()->json($permission);
    }

    public function update(PermissionRequest $request, Permission $permission)
    {
        return response()->json($permission->update($request->validated()));
    }

    public function destroy(Permission $permission)
    {
        return response()->json($permission->delete());
    }
}
