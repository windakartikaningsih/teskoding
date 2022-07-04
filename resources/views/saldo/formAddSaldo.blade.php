@extends('layout.index')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">List Saldo</a></li>
        <li class="breadcrumb-item active">Form Add Saldo</li>
    </ol>
@endsection('breadcrumbs')

@section('titleTab', 'Form Add Saldo')
@section('title', 'Form Add Saldo')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0">Add Saldo</h5>
                <form class="form-horizontal auth-form my-4" action="{{ route('prosesAddSaldo') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">ID</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="id" name="id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="nama" name="nama">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 text-right">
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