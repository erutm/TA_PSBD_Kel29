@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Reservasi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="table-responsive col-lg-12">
            <a href="/dashboard/reservasis/recycle" class="btn btn-danger mb-3"><i class="fas fa-trash"></i> Sampah Penolakan</a>
            <div class="card mb-4">
                <div class="card-header">Semua Reservasi</div>
                <div class="card-body">
                    <table class="table table-bordered table-sm" id="reservasi-table">
                        <thead>
                            <tr>
                            <th scope="col"># </th>
                            <th scope="col">No. Reservasi</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">No Hp Pemesan</th>
                            <th scope="col">Barber</th>
                            <th scope="col">Waktu Potong</th>
                            <th scope="col">Waktu Pemesanan</th>
                            <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservasis as $reservasi)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reservasi->id }}</td>
                            <td>{{ $reservasi->nama_pelanggan }}</td>
                            <td>{{ $reservasi->no_pelanggan }}</td>
                            <td>{{ $reservasi->nama_barber }}</td>
                            <td>{{ $reservasi->jam_potong }}</td>
                            <td>{{ $reservasi->created_at}}</td>
                            <td class="d-flex justify-content-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detail{{ $reservasi->id }}" class="btn btn-warning">Detail</a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#approve{{ $reservasi->id }}" class="mx-1 btn btn-success">Menyetujui</a>
                                <form action="/dashboard/reservasis/{{ $reservasi->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Apakah Admin Yakin Menghapusnya ?')">Menolak</button>
                                </form>
                            </td>
                            </tr>
                            {{-- Modal --}}
                            @include('dashboard.reservasi.modal')
                            @include('dashboard.reservasi.approvalModal')
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/datatables.min.js"></script>
<script>
    $('#reservasi-table').DataTable({});
</script>
</main>
    @include('dashboard.layouts.footer')
</div>
@endsection
