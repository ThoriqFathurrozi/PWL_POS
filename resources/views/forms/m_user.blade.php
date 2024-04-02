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
        <h3 class="card-title">m_user</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="/user/tambah_simpan" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level_id">
                            <option>Administrator</option>
                            <option>Manager</option>
                            <option>Staff</option>
                            <option>Customers</option>
                        </select>
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nama">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter ..." name="password">
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