<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'nama',
        'dist_id',
        'qty',
        'harga_satuan',
        'total',
        'user_id'
    ];
    protected $with = ['distributor', 'user'];

    public function distributor()
    {
        return $this->belongsTo(Distributor::class, 'dist_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
