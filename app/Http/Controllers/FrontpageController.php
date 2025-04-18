<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Toko;
use App\Models\Reservasi;
use App\Models\Barber;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
        return view('frontpage.pages.index');
    }

    public function product(){
        $pakets = Paket::latest()
            ->filter(request(['search','keterangan_paket','nama_paket']))
            ->paginate(8)
            ->withQueryString();
    
        $barbers = Barber::all(); // Ambil semua data barber
    
        return view('frontpage.pages.product', [
            'pakets' => $pakets,
            'barbers' => $barbers // Kirimkan ke view
        ]);
    }
    

    public function showProduct(Request $request){
        $pakets = Paket::all();
        if($request->keyword != ''){
            $pakets = Paket::where('keterangan_paket','LIKE','%'.$request->keyword.'%')->get();
        }
        return response()->json([
            'pakets' => $pakets
        ]);
    }
    
    public function beliProduk(Request $request)
    {
        $validatedData = $request->validate([
            'id_paket' => ['required', 'exists:pakets,id'],
            'id_barber' => ['required', 'exists:barbers,id'],
            'nama_pelanggan' => ['required', 'string', 'max:255'],
            'no_pelanggan' => ['required', 'string', 'max:15'],
            'jam_potong' => ['required', 'string', 'max:255'],
        ]);

        // Simpan reservasi
        Reservasi::create($validatedData);

        return redirect('/product')->with('success', 'Reservasi berhasil dilakukan!');
    }


    public function about(){
        return view('frontpage.pages.about');
    }
}
