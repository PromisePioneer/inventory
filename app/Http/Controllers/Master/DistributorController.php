<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\DistributorRequest;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class DistributorController extends Controller
{
    public function index()
    {
        return view('pages.master.distributor.index');
    }

    public function data(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        return response()->json(Distributor::paginate($perPage));
    }

    public function search(Request $request)
    {
        $perm = Distributor::where('nama', 'like', '%'. $request->search . '%')->get();
        return response()->json($perm);
    }

    public function store(DistributorRequest $request)
    {
        return response()->json(Distributor::create($request->validated()));
    }

    public function edit(Distributor $distributor)
    {
        return response()->json($distributor);
    }

    public function update(DistributorRequest $request, Distributor $distributor)
    {
        return response()->json($distributor->update($request->validated()));
    }

    public function destroy(Distributor $distributor)
    {
        return response()->json($distributor->delete());
    }
}
