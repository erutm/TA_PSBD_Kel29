<!-- Modal -->
<div class="modal fade" id="beliModal{{ $paket->id }}" tabindex="-1" aria-labelledby="beliProduk" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="beliProduk">Pesan Reservasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="/product/beli" method="POST">
          @csrf

          <!-- ✅ Kirim id_paket -->
          <input type="hidden" name="id_paket" value="{{ $paket->id }}">

          <!-- ✅ Tampilkan info nama paket -->
          <div class="mb-3">
            <label for="nama_paket_{{ $paket->id }}" class="form-label">Paket Barber</label>
            <input type="text" class="form-control" id="nama_paket_{{ $paket->id }}" value="{{ $paket->nama_paket }}" readonly>
          </div>

          <!-- ✅ Tampilkan keterangan -->
          <div class="mb-3">
            <label for="keterangan_paket_{{ $paket->id }}" class="form-label">Keterangan Dari Paket</label>
            <input type="text" class="form-control" id="keterangan_paket_{{ $paket->id }}" value="{{ $paket->keterangan_paket }}" readonly>
          </div>

          <!-- ✅ Tampilkan harga -->
          <div class="mb-3">
            <label for="harga_{{ $paket->id }}" class="form-label">Harga dari paket</label>
            <input type="text" class="form-control" id="harga_{{ $paket->id }}" value="{{ $paket->harga }}" readonly>
          </div>

          <!-- ✅ Input nama pelanggan -->
          <div class="mb-3">
            <label for="nama_pelanggan_{{ $paket->id }}" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama_pelanggan_{{ $paket->id }}" name="nama_pelanggan" required>
          </div>

          <!-- ✅ Input no HP -->
          <div class="mb-3">
            <label for="no_pelanggan_{{ $paket->id }}" class="form-label">No HP Pembeli</label>
            <input type="text" class="form-control" id="no_pelanggan_{{ $paket->id }}" name="no_pelanggan" required>
          </div>

          <!-- ✅ Kirim id_barber lewat dropdown -->
          <div class="mb-3">
            <label for="id_barber_{{ $paket->id }}" class="form-label">Pilih Barber</label>
            <select class="form-control" id="id_barber_{{ $paket->id }}" name="id_barber" required>
              <option value="" disabled selected hidden>Pilih Barber</option> <!-- Ini placeholder -->
              @foreach ($barbers as $barber)
                <option value="{{ $barber->id }}">{{ $barber->nama_barber }}</option>
              @endforeach
            </select>
          </div>

          <!-- ✅ Input waktu potong -->
          <div class="mb-3">
            <label for="jam_potong_{{ $paket->id }}" class="form-label">Waktu Potong</label>
            <input type="text" class="form-control" id="jam_potong_{{ $paket->id }}" name="jam_potong" required>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Pesan Reservasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
