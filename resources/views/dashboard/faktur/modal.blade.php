<!-- Modal -->
<div class="modal fade" id="detail{{ $faktur->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable custom-modal-width">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Rincian</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4 fw-bold">Persetujuan</div>
          <div class="col-sm-8">: {{ $faktur->persetujuan }}</div>

          <div class="col-sm-4 fw-bold">Pilihan Paket</div>
          <div class="col-sm-8">: {{ $faktur->nama_paket }} {{ $faktur->keterangan_paket }}</div>

          <div class="col-sm-4 fw-bold">Pemesan</div>
          <div class="col-sm-8">: {{ $faktur->nama_pelanggan }}</div>

          <div class="col-sm-4 fw-bold">No Hp Pemesan</div>
          <div class="col-sm-8">: {{ $faktur->no_pelanggan }}</div>

          <div class="col-sm-4 fw-bold">Barber</div>
          <div class="col-sm-8">: {{ $faktur->nama_barber }}</div>

          <div class="col-sm-4 fw-bold">Jam Potong</div>
          <div class="col-sm-8">: {{ $faktur->jam_potong }}</div>

          <div class="col-sm-4 fw-bold">Harga</div>
          <div class="col-sm-8">: {{ $faktur->harga }}</div>

          <div class="col-sm-4 fw-bold">Tanggal</div>
          <div class="col-sm-8">: {{ $faktur->created_at->toDateString() }}</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
      </div>
    </div>
  </div>
</div>

<!-- Tambahkan CSS custom jika ingin ukuran lebih lebar -->
<style>
  .custom-modal-width {
    max-width: 900px;
  }
</style>