<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    protected $table = "transaksi";
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['no', 'ID', 'nominal', 'jenis', 'tanggal'];

    public function getListTransaksi()
    {
        $transaksi = new TransaksiModel;
        $data = $transaksi
        ->select('saldo.*', 'transaksi.*')
        ->leftJoin('saldo', 'saldo.ID', '=', 'transaksi.ID')
        ->get();
        return $data;
    }

    public function getListTransaksiById($no)
    {
        $transaksi = new TransaksiModel;
        $data = $transaksi
        ->select('saldo.*', 'transaksi.*')
        ->leftJoin('saldo', 'saldo.ID', '=', 'transaksi.ID')
        ->where('transaksi.no', $no)
        ->first();
        return $data;
    }

    public function updateTransaksiByNo($no, $data)
    {
        $transaksi = new TransaksiModel;
        $data = $transaksi->where('no', $no)->update($data);
    }

    public function getSumDebetByID($ID)
    {
        $transaksi = new TransaksiModel;
        $data = $transaksi
        ->where('jenis', 'Debet')
        ->where('ID', $ID)
        ->sum('nominal');
        return $data;
    }

    public function getSumKreditByID($ID)
    {
        $transaksi = new TransaksiModel;
        $data = $transaksi
        ->where('jenis', 'Kredit')
        ->where('ID', $ID)
        ->sum('nominal');
        return $data;
    }
}
