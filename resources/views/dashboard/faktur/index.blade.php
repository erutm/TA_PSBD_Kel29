@extends('dashboard.layouts.main')

@section('container')
<div id="layoutSidenav_content">
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Catatan Rincian</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="table-responsive col-lg-12">
      <div class="card mb-4">
        <div class="card-header">Daftar Tabel Rincian</div>
        <div class="card-body">
          <table class="table table-bordered table-sm" id="reservasi-table">
            <thead>
              <tr>
                <th>#</th>
                <th>No. Reservasi</th>
                <th>Nama Pelanggan</th>
                <th>No. Pelanggan</th>
                <th>Nama Paket</th>
                <th>Deskripsi</th>
                <th>Barber</th>
                <th>Jam Potong</th>
                <th>Harga</th>
                <th>Disetujui Oleh</th>
                <th>Tanggal Pemesanan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($fakturs as $faktur)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $faktur->id }}</td>
                <td>{{ $faktur->nama_pelanggan }}</td>
                <td>{{ $faktur->no_pelanggan }}</td>
                <td>{{ $faktur->nama_paket}}</td>
                <td>{{ $faktur->keterangan_paket}}</td>
                <td>{{ $faktur->nama_barber}}</td>
                <td>{{ $faktur->jam_potong }}</td>
                <td>{{ $faktur->harga}}</td>
                <td>{{ $faktur->persetujuan }}</td>
                <td>{{ $faktur->created_at}}</td>
                <td class="d-flex justify-content-center">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#detail{{ $faktur->id }}" class="btn btn-warning mx-1">Detail</a>
                </td>
              </tr>
              @include('dashboard.faktur.modal', ['faktur' => $faktur])
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/datatables.min.js"></script>
<script>
  $('#reservasi-table').DataTable({});
</script>
</main>
@include('dashboard.layouts.footer')
</div>
@endsection
