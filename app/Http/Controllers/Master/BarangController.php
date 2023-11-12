<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarangRequest;
use App\Models\Barang;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index()
    {
        return view('pages.master.barang.index');
    }

    public function data(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        return response()->json(Barang::with('distributor','user')->paginate($perPage));
    }

    public function distData()
    {
        return response()->json(Distributor::all(), 200);
    }

    public function search(Request $request)
    {
        $search = Barang::with('distributor')
            ->where('nama', 'like', '%' . $request->search . '%')
            ->get();
        return response()->json($search);
    }

    public function store(BarangRequest $request)
    {
        $barang = Barang::create([
            'nama' => $request->nama,
            'dist_id' => $request->dist_id,
            'qty' => $request->qty,
            'harga_satuan' => $request->harga_satuan,
            'total' =>   $request->qty * $request->harga_satuan,
            'user_id' => Auth::id()
        ]);

        return response()->json($barang, 200);
    }

    public function edit(Barang $barang)
    {
        return response()->json($barang, 200);
    }

    public function update(BarangRequest $request, Barang $barang)
    {
        $barang->update([
            'nama' => $request->nama,
            'dist_id' => $request->dist_id,
            'qty' => $request->qty,
            'harga_satuan' => $request->harga_satuan,
            'total' =>   $request->qty * $request->harga_satuan,
            'user_id' => Auth::id()
        ]);

        return response()->json($barang, 200);
    }

    public function destroy(Barang $barang)
    {
        return response($barang->delete());
    }
}
