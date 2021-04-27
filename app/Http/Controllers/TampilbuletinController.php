<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buletin;

class TampilbuletinController extends Controller
{
    public function index()
    {
        $buletins = Buletin::all();

        return view('buletin', ["buletins" => $buletins]);
    }
    public function show($id)
    {
        $buletins = Buletin::findOrFail($id);
        return view('showbuletin', compact('buletins'));
    }
}
