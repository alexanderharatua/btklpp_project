<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Downloads;

class TampildownloadController extends Controller
{
    public function index()
    {
        $downloads = Downloads::paginate(3);

        return view('download', ["downloads" => $downloads]);
    }

}
