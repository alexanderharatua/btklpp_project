<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Downloads;

class TampildownloadController extends Controller
{
    public function index()
    {
        $downloads = Downloads::all();

        return view('download', ["downloads" => $downloads]);
    }

}
