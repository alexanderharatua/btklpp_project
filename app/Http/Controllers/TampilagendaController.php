<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class TampilagendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::all();

        return view('agenda', ["agendas" => $agendas]);
    }
    public function show($id)
    {
        $agendas = Agenda::findOrFail($id);
        return view('showagenda', compact('agendas'));
    }
}
