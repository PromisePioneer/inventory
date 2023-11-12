<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransaksiRequest;
use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangMasukController extends Controller
{
    public function index()
    {
        return view('pages.barang-masuk.index');
    }

    public function data(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $data = Transaksi::with('barang', 'user')->where('type', 'barang_masuk')->paginate($perPage);

        return response()->json($data, 200);
    }

    public function barangData()
    {
        return response()->json(Barang::all(), 200);
    }

    public function search(Request $request)
    {
        $search = Transaksi::where('type', 'barang_masuk')
            ->where(function ($query) use ($request) {
                $query->orWhereHas('barang', function ($query) use ($request) {
                    $query->where('nama', 'like', '%' . $request->search . '%');
                })->orWhereHas('user', function ($query) use ($request) {
                        $query->where('name', 'like', '%' . $request->search . '%');
                })->orWhere('qty', 'like', '%' . $request->search . '%')
                    ->orWhere('harga_satuan', 'like', '%' . $request->search . '%');
            })
            ->get();

        return response()->json($search);
    }

    public function store(TransaksiRequest $request)
    {
        $transaksi = Transaksi::create([
            'barang_id' => $request->barang_id,
            'tanggal' => $request->tanggal,
            'qty' => $request->qty,
            'harga_satuan' => $request->harga_satuan,
            'total' => $request->qty * $request->harga_satuan,
            'type' => 'barang_masuk',
            'user_id' => Auth::id()
        ]);

        return response()->json($transaksi, 200);
    }

    public function edit(Transaksi $transaksi)
    {
        return response()->json($transaksi);
    }

    public function update(TransaksiRequest $request, Transaksi $transaksi)
    {
        $transaksi->update([
            'barang_id' => $request->barang_id,
            'tanggal' => $request->tanggal,
            'qty' => $request->qty,
            'harga_satuan' => $request->harga_satuan,
            'total' => $request->qty * $request->harga_satuan,
            'type' => 'barang_masuk',
            'user_id' => Auth::id()
        ]);

        return response()->json($transaksi, 200);
    }

    public function destroy(Transaksi $transaksi)
    {
        return response()->json($transaksi->delete(), 200);
    }

    public function updateStatus(Request $request ,Transaksi $transaksi)
    {
        $update = [
            'status' => $transaksi->status == 0 ? 1 : 0
        ];
        Transaksi::whereId($transaksi->id)->update($update);

        $barang = Barang::find($transaksi->barang_id);
        $barang->qty += $transaksi->qty;
        $barang->harga_satuan += $transaksi->harga_satuan;
        $barang->total += $barang->qty * $barang->harga_satuan;
        return $barang->save();
    }


    public function laporan($tglAwal, $tglAkhir)
    {
        $laporan = Transaksi::with('barang')
            ->where('type', 'barang_masuk')
            ->where('status', 1)
            ->whereBetWeen('tanggal', [$tglAwal, $tglAkhir])
            ->get();

        return view('pages.barang-masuk.components.laporan-pdf', compact('laporan'));
    }
}
