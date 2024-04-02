@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Dashboard</h1>
@stop
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- general form elements disabled -->

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">m_level</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="/level/tambah_simpan" method="post">
            {{csrf_field()}}

            <div class="row">
                <div class="col-sm-6">

                    <!-- text input -->
                    <div class="form-group">
                        <label>Level Kode</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Level Nama</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <button class="btn btn-info" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /.card-body -->
</div>
@stop
@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop