@extends('frontpage.layouts.main')
@section('container')

{{-- Header --}}
@include('frontpage.layouts.header')

<h2 class="mb-3 mt-3 fw-bold text-center">Pilihan Paket Barbershop</h2>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/product" method="GET">
            @if(request('nama_paket'))
                <input type="hidden" name="nama_paket" value="{{ request('nama_paket') }}">
            @endif
            @if(request('keterangan_paket'))
                <input type="hidden" name="keterangan_paket" value="{{ request('keterangan_paket') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

{{-- Produk/Card --}}
<div class="container">
    <div class="row g-4">
        @foreach($pakets as $paket)
            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-stretch">
                @include('frontpage.components.card')
                @include('frontpage.components.modal', ['barbers' => $barbers])
            </div>
        @endforeach
    </div>
</div>

{{-- Pagination --}}
<div class="d-flex justify-content-center mb-3">
    {{ $pakets->links() }}
</div>

{{-- SweetAlert Sukses --}}
@if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Reservasi Berhasil!',
            text: '{{ session("success") }}',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        });
    </script>
@endif

{{-- Footer --}}
@include('frontpage.layouts.footer')

@endsection
