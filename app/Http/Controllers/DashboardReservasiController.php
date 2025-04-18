<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardReservasiController extends Controller
{

    public function index()
    {
        $reservasis = DB::table('reservasis')
            ->join('barbers', 'reservasis.id_barber', '=', 'barbers.id')
            ->join('pakets', 'reservasis.id_paket', '=', 'pakets.id')
            ->where('reservasis.isApprove', 0)
            ->select(
                'reservasis.*',
                'barbers.nama_barber',
                'pakets.nama_paket',
                'pakets.harga',
                'pakets.keterangan_paket'
            )
            ->get();

        return view('dashboard.reservasi.index', compact('reservasis'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_paket' => ['required','max:255'],
            'keterangan_paket' => ['required','max:255'],
            'nama_pelanggan' => ['required', 'max:255'],
            'no_pelanggan' => ['required', 'max:255'],
            'nama_barber' => ['required', 'max:255'],
            'jam_potong' => ['required', 'max:255'],
            'harga' => ['required']
        ]);

        Reservasi::create($validatedData);

        return redirect('/product')->with('success', 'Reservasi berhasil dilakukan!');
    }

    
    public function update(Request $request, Reservasi $reservasi)
    {
        $validatedData = $request->validate([
            'persetujuan' => ['required'],
            'isApprove' => ['required']
        ]);

        Reservasi::where('id', $reservasi->id)->update($validatedData);
        return redirect('/dashboard/fakturs')->with('success', 'Reservasi telah disetujui.');
    }

    public function destroy(Reservasi $reservasi)
    {
        Reservasi::find($reservasi->id)->delete();
        return redirect('/dashboard/reservasis');
    }

    public function recycle(){
        return view('dashboard.reservasi.recycle', [
            'reservasis' => Reservasi::onlyTrashed()->where('isApprove', 0)->get()
        ]);
    }

    public function restore($reservasiId){
        Reservasi::onlyTrashed()->where('isApprove', 0)->find($reservasiId)->restore();
        return redirect('/dashboard/reservasis/recycle');
    }

    public function delete($reservasiId){
        Reservasi::onlyTrashed()->where('isApprove', 0)->find($reservasiId)->forceDelete();
        return redirect('/dashboard/reservasis/recycle');
    }
}
