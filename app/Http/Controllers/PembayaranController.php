<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranModel;

class PembayaranController extends Controller
{
    public function getListPembayaran(Request $request)
    {
        $pembayaran = PembayaranModel::getListPembayaran();

        $passing = array(
            'pembayaran' => $pembayaran,
        );
        return view('pembayaran.listPembayaran', $passing);
    }

    public function FormAddPembayaran(Request $request)
    {
        $nama = PembayaranModel::select('*')->get();
        $passing = array(
            'nama' => $nama,
        );
        return view('pembayaran.formAddPembayaran', $passing);
    }

    public function prosesAddPembayaran(Request $request)
	{
        $data = array(
            'ID' => $request->nama,
            'nominal' => $request->nominal,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
        );
        PembayaranModel::insert($data);

        $debet = PembayaranModel::getSumDebetByID($request->nama);
        $kredit = PembayaranModel::getSumKreditByID($request->nama);
        $totalSaldo = $kredit - $debet;
        $dataUpdate = array(
            'saldo' => $totalSaldo,
        );
        PembayaranModel::updateSaldoByNo($request->nama, $dataUpdate);

        return redirect()->back()->with('alertSuccess', 'Data Berhasil Ditambahkan');
	}

    public function FormUpdatePembayaran(Request $request)
    {
        $nama = PembayaranModel::select('*')->get();
        $detail = PembayaranModel::getListPembayaranById($request->no);
        $passing = array(
            'nama' => $nama,
            'detail' => $detail,
        );
        return view('pembayaran.formUpdatePembayaran', $passing);
    }

    public function prosesUpdatePembayaran(Request $request)
	{
        $data = array(
            'ID' => $request->nama,
            'nominal' => $request->nominal,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
        );
        PembayaranModel::updatePembayaranByNo($request->no, $data);

        $debet = PembayaranModel::getSumDebetByID($request->nama);
        $kredit = PembayaranModel::getSumKreditByID($request->nama);
        $totalSaldo = $kredit - $debet;
        $dataUpdate = array(
            'saldo' => $totalSaldo,
        );
        PembayaranModel::updateSaldoByNo($request->nama, $dataUpdate);

        return redirect()->back()->with('alertSuccess', 'Data Berhasil Diupdate');
	}

    public function prosesDeletePembayaran(Request $request)
	{
		PembayaranModel::where('no', $request->no)->delete();

        $debet = PembayaranModel::getSumDebetByID($request->nama);
        $kredit = PembayaranModel::getSumKreditByID($request->nama);
        $totalSaldo = $kredit - $debet;
        $dataUpdate = array(
            'saldo' => $totalSaldo,
        );
        PembayaranModel::updateSaldoByNo($request->nama, $dataUpdate);

		return redirect('user')->with('alertSuccess', 'User Berhasil Dihapus');
	}
}
