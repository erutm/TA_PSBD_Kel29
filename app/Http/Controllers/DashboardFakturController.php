<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservasi;

class DashboardFakturController extends Controller
{
    public function index()
    {
        $fakturs = DB::table('reservasis as r')
            ->Join('pakets as p', 'r.id_paket', '=', 'p.id')
            ->Join('barbers as b', 'r.id_barber', '=', 'b.id')
            ->select(
                'r.id',
                'r.nama_pelanggan',
                'r.no_pelanggan',
                'p.nama_paket',
                'p.keterangan_paket',
                'b.nama_barber',
                'r.jam_potong',
                'p.harga',
                'r.isApprove',
                'r.persetujuan',
                'r.created_at'
            )
            ->where('r.isApprove', 1)
            ->orderByDesc('r.id')
            ->get();

            return view('dashboard.faktur.index', [
                'fakturs' => $fakturs
            ]);
    }

    public function destroy(Reservasi $reservasi)
    {
        Reservasi::find($reservasi->id)->delete();
        return redirect('/dashboard/fakturs');
    }

    public function recycle()
    {
        return view('dashboard.faktur.recycle', [
            'fakturs' => Reservasi::onlyTrashed()->where('isApprove', 1)->get()
        ]);
    }

    public function restore($reservasiId)
    {
        Reservasi::onlyTrashed()->where('isApprove', 1)->find($reservasiId)->restore();
        return redirect('/dashboard/fakturs/recycle');
    }

    public function delete($reservasiId)
    {
        Reservasi::onlyTrashed()->where('isApprove', 1)->find($reservasiId)->forceDelete();
        return redirect('/dashboard/fakturs/recycle');
    }
}

?>
