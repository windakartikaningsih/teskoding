<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use App\Models\SaldoModel;

class TransaksiController extends Controller
{
    public function getListTransaksi(Request $request)
    {
        $transaksi = TransaksiModel::getListTransaksi();

        $passing = array(
            'transaksi' => $transaksi,
        );
        return view('transaksi.listTransaksi', $passing);
    }

    public function FormAddTransaksi(Request $request)
    {
        $nama = SaldoModel::select('*')->get();
        $passing = array(
            'nama' => $nama,
        );
        return view('transaksi.formAddTransaksi', $passing);
    }

    public function prosesAddTransaksi(Request $request)
	{
        $data = array(
            'ID' => $request->nama,
            'nominal' => $request->nominal,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
        );
        TransaksiModel::insert($data);

        $debet = TransaksiModel::getSumDebetByID($request->nama);
        $kredit = TransaksiModel::getSumKreditByID($request->nama);
        $totalSaldo = $kredit - $debet;
        $dataUpdate = array(
            'saldo' => $totalSaldo,
        );
        SaldoModel::updateSaldoByNo($request->nama, $dataUpdate);

        return redirect()->back()->with('alertSuccess', 'Data Berhasil Ditambahkan');
	}

    public function FormUpdateTransaksi(Request $request)
    {
        $nama = SaldoModel::select('*')->get();
        $detail = TransaksiModel::getListTransaksiById($request->no);
        $passing = array(
            'nama' => $nama,
            'detail' => $detail,
        );
        return view('transaksi.formUpdateTransaksi', $passing);
    }

    public function prosesUpdateTransaksi(Request $request)
	{
        $data = array(
            'ID' => $request->nama,
            'nominal' => $request->nominal,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
        );
        TransaksiModel::updateTransaksiByNo($request->no, $data);

        $debet = TransaksiModel::getSumDebetByID($request->nama);
        $kredit = TransaksiModel::getSumKreditByID($request->nama);
        $totalSaldo = $kredit - $debet;
        $dataUpdate = array(
            'saldo' => $totalSaldo,
        );
        SaldoModel::updateSaldoByNo($request->nama, $dataUpdate);

        return redirect()->back()->with('alertSuccess', 'Data Berhasil Diupdate');
	}

    public function prosesDeleteTransaksi(Request $request)
	{
		TransaksiModel::where('no', $request->no)->delete();

        $debet = TransaksiModel::getSumDebetByID($request->nama);
        $kredit = TransaksiModel::getSumKreditByID($request->nama);
        $totalSaldo = $kredit - $debet;
        $dataUpdate = array(
            'saldo' => $totalSaldo,
        );
        SaldoModel::updateSaldoByNo($request->nama, $dataUpdate);

		return redirect('user')->with('alertSuccess', 'User Berhasil Dihapus');
	}
}
