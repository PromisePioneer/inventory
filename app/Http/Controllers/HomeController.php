<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $distributor = Distributor::count();
        $barang_masuk = Transaksi::where('type', 'barang_masuk')->count();
        $barang_keluar = Transaksi::where('type', 'barang_keluar')->count();
        $total_barang_masuk = Transaksi::where('type', 'barang_masuk')->sum('total');
        $total_barang_keluar = Transaksi::where('type', 'barang_keluar')->sum('total');
        return view('home', compact('distributor','barang_masuk', 'barang_keluar', 'total_barang_masuk', 'total_barang_keluar'));
    }
}
