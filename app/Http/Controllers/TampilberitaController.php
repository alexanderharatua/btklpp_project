<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class TampilberitaController extends Controller
{
    public function index()
    {
        $news = News::select('*')
        ->orderBy('id', 'desc')
        ->get();

        return view('berita', ["news" => $news]);
    }
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('showberita', compact('news'));
    }
}
