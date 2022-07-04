@extends('layout.index')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">List Saldo</li>
    </ol>
@endsection('breadcrumbs')

@section('titleTab', 'List Saldo')
@section('title', 'List Saldo')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                {{-- <a href="{{ route('FormAddTransaksi') }}" class="btn btn-purple btn-round"><i class="dripicons-plus"></i> Tambah Transaksi</a> --}}
            </div>
            <div class="card-body">
                <div class="table-wrapper">
                    <table id="datatable" class="table table-bordered table-striped table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $no = 1;
                                foreach($saldo as $list){
                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td class='text-center'>$list->ID</td>
                                            <td>$list->nama</td>
                                            <td>Rp. ".number_format($list->saldo)."</td>
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