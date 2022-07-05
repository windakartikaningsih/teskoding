<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranModel extends Model
{
    protected $table = "pembayaran";
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['id', 'no_kwitansi', 'tanggal', 'tanggal_alokasi', 'customer', 'metode_pembayaran', 'total', 'biaya_admin', 'created_at', 'updated_at'];

    public function getListPembayaran()
    {
        $pembayaran = new PembayaranModel;
        $data = $pembayaran
        ->select('*')
        ->limit(5)->get();
        return $data;
    }
}
