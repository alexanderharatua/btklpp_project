<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;

class TampilpengumumanController extends Controller
{
    public function index()
    {
        $announcements = Announcements::all();

        return view('pengumuman', ["announcements" => $announcements]);
    }
}
