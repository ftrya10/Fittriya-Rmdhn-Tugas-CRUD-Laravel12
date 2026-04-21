<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
        $salons = Salon::all();
        return view('salon.index', compact('salons'));
    }

    public function create()
    {
        return view('salon.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_salon' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'deskripsi' => 'nullable'
        ]);

        Salon::create($validated);

        return redirect('/salon');
    }
}