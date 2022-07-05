@extends('layout.index')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">List Pembayaran</a></li>
        <li class="breadcrumb-item active">Form Update Pembayaran</li>
    </ol>
@endsection('breadcrumbs')

@section('titleTab', 'Form Update Pembayaran')
@section('title', 'Form Update Pembayaran')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0">Update Pembayaran</h5>
                <form class="form-horizontal auth-form my-4" action="{{ route('prosesUpdatePembayaran') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group row">
                                <label for="no_kwitansi" class="col-sm-3 col-form-label">No. Kwitansi</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="no_kwitansi" name="no_kwitansi" value="<?= $detail->no_kwitansi ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="tanggal" name="tanggal" value="<?= $detail->tanggal ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group row">
                                <label for="customer" class="col-sm-3 col-form-label">Customer</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="customer" name="customer" value="<?= $detail->customer ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="metode_pembayaran" class="col-sm-3 col-form-label">Metode Pembayaran</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="metode_pembayaran" name="metode_pembayaran" value="<?= $detail->metode_pembayaran ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group row">
                                <label for="total" class="col-sm-3 col-form-label">Total</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="total" name="total" value="<?= $detail->total ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 text-right">
                            <input class="form-control" type="text" id="no" name="no" value="<?= $detail->no ?>" hidden>
                            <button type="submit" class="btn btn-primary waves-effect waves-light" style="width: 200px">Submit</button>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="reset" class="btn btn-dark waves-effect waves-light" style="width: 200px">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection