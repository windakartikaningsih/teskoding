@extends('layout.index')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">List Pembayaran</li>
    </ol>
@endsection('breadcrumbs')

@section('titleTab', 'List Pembayaran')
@section('title', 'List Pembayaran')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('FormAddPembayaran') }}" class="btn btn-purple btn-round"><i class="dripicons-plus"></i> Tambah Pembayaran</a>
            </div>
            <div class="card-body">
                <div class="table-wrapper">
                    <table id="datatable" class="table table-bordered table-striped table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>No Kwitansi</th>
                                <th>Tanggal</th>
                                <th>Tanggal Alokasi</th>
                                <th>Customer</th>
                                <th>Metode Pembayaran</th>
                                <th>Total</th>
                                <th>Biaya Admin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                                foreach($pembayaran as $list){
                                    $button  = '
                                        <a target="_blank" href="'.route('formUpdatePembayaran', ['id' => $list->id]).'" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a> | 
                                        <a href="'.route('prosesDeletePembayaran', ['id' => $list->id]).'" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>';
                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td class='text-center'>$list->no_kwitansi</td>
                                            <td>$list->tanggal</td>
                                            <td>$list->tanggal_alokasi</td>
                                            <td>$list->customer</td>
                                            <td>$list->metode_pembayaran</td>
                                            <td>Rp. ".number_format($list->total)."</td>
                                            <td>Rp. ".number_format($list->biaya_admin)."</td>
                                            <td>$button</td>
                                        </tr>
                                    ";
                                    $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection