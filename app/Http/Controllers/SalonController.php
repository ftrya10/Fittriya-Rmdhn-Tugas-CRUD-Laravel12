<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salon;

class SalonController extends Controller
{
    public function index()
    {
        $salon = Salon::all();
        return view('index', compact('salon'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Salon::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'layanan' => $request->layanan,
            'harga' => $request->harga,
            'tanggal_booking' => $request->tanggal_booking,
        ]);

        return redirect('/salon');
    }

    public function edit($id)
    {
        $salon = Salon::findOrFail($id);
        return view('edit', compact('salon'));
    }

    public function update(Request $request, $id)
    {
        $salon = Salon::findOrFail($id);

        $salon->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'layanan' => $request->layanan,
            'harga' => $request->harga,
            'tanggal_booking' => $request->tanggal_booking,
        ]);

        return redirect('/salon');
    }

    public function destroy($id)
    {
        $salon = Salon::findOrFail($id);
        $salon->delete();

        return redirect('/salon');
    }
}