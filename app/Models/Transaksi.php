<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
   protected $table = 'transaksi';
   protected $fillable = [
       'barang_id',
       'qty',
       'harga_satuan',
       'tanggal',
       'total',
       'type',
       'user_id',
       'status'
   ];
   protected $with = ['barang', 'user'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
   }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
   }


}
