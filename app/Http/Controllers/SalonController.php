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
}