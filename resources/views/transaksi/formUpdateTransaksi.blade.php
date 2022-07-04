@extends('layout.index')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">List Transaksi</a></li>
        <li class="breadcrumb-item active">Form Update Transaksi</li>
    </ol>
@endsection('breadcrumbs')

@section('titleTab', 'Form Update Transaksi')
@section('title', 'Form Update Transaksi')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0">Add Transaksi</h5>
                <form class="form-horizontal auth-form my-4" action="{{ route('prosesUpdateTransaksi') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <select id="nama" name="nama" class="form-control" required>
                                        <option value="">Please Select Option</option>
                                        <?php
                                            foreach($nama as $list){
                                                if($list->nama == $detail->nama)
                                                {
                                                    $sel = 'selected';
                                                }else{
                                                    $sel = '';
                                                }
                                                echo "
                                                    <option value='$list->ID' $sel>$list->nama</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nominal" class="col-sm-3 col-form-label">Nominal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="nominal" name="nominal" value="<?= $detail->nominal ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Transaksi</label>
                                <div class="col-sm-8">
                                    <select id="jenis" name="jenis" class="form-control" required>
                                        <option value="">Please Select Option</option>
                                        <option value="Debet" <?= $detail->jenis == 'Debet' ? 'selected' : '' ?>>Debet</option>
                                        <option value="Kredit" <?= $detail->jenis == 'Kredit' ? 'selected' : '' ?>>Kredit</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="tanggal" name="tanggal" value="<?= $detail->tanggal ?>">
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