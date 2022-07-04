@extends('layout.index')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">List Transaksi</li>
    </ol>
@endsection('breadcrumbs')

@section('titleTab', 'List Transaksi')
@section('title', 'List Transaksi')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('FormAddTransaksi') }}" class="btn btn-purple btn-round"><i class="dripicons-plus"></i> Tambah Transaksi</a>
            </div>
            <div class="card-body">
                <div class="table-wrapper">
                    <table id="datatable" class="table table-bordered table-striped table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nominal</th>
                                <th>Jenis</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                                foreach($transaksi as $list){
                                    $button  = '
                                        <a target="_blank" href="'.route('formUpdateTransaksi', ['no' => $list->no]).'" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a> | 
                                        <a href="'.route('prosesDeleteTransaksi', ['no' => $list->no]).'" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>';
                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td class='text-center'>$list->nama</td>
                                            <td>Rp. ".number_format($list->nominal)."</td>
                                            <td>$list->jenis</td>
                                            <td>$list->tanggal</td>
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