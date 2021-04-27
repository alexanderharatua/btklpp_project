<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Buletin;

class HomeuserController extends Controller
{
    public function tampilagenda()
    {
        // $agendas = Agenda::all()->sortBy()('id', 'desc');
        $agendas = Agenda::select('*')
                    ->orderBy('id', 'desc')
                    ->get();
        $buletins = Buletin::select('*')
                    ->orderBy('id', 'desc')
                    ->get();
        return view('home1', compact('agendas', 'buletins'));
    }

    public function tampilbuletin()
    {

    }
}
