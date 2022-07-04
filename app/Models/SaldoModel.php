<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoModel extends Model
{
    protected $table = "saldo";
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['no', 'ID', 'nama', 'saldo'];

    public function updateSaldoByNo($ID, $data)
    {
        $saldo = new SaldoModel;
        $data = $saldo->where('ID', $ID)->update($data);
    }
}
