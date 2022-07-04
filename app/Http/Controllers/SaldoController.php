<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaldoModel;

class SaldoController extends Controller
{
    public function getListSaldo(Request $request)
    {
        $saldo = SaldoModel::select('*')->get();

        $passing = array(
            'saldo' => $saldo,
        );
        return view('saldo.listSaldo', $passing);
    }

    public function FormAddSaldo(Request $request)
    {
        return view('saldo.formAddSaldo', $passing);
    }

    public function prosesAddSaldo(Request $request)
	{
        $data = array(
            'ID' => $request->id,
            'nama' => $request->nama,
        );
        SaldoModel::insert($data);

        return redirect()->back()->with('alertSuccess', 'Data Berhasil Ditambahkan');
	}
}
