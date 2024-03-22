@extends('layout.app')

{{-- Customize layout sections--}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
<style>
    .card-header::after {
        content: none;
    }
</style>
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between w-100 ">
            <h3>Manage Kategori</h3>
            <a href="/kategori/create" class="btn btn-primary">Tambah Kategori</a>
        </div>
        <div class="card-body">
            {{$dataTable->table()}}
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{$dataTable->scripts()}}
@endpush