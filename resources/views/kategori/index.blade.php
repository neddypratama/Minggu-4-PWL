@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                <a href="/kategori/create" class="mb-3 btn btn-primary">Add Kategori</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

$@push('script')
    {{ $dataTable->scripts() }}
@endpush