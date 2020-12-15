<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;

class AnnouncementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcements = Announcements::all();

        return view('pengumuman.index', ["announcements" => $announcements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request->all());


        $announcements = Announcements::create($request->all()); // tapi isi di model $fillable nya

       return redirect('/admin/pengumuman/announcements');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $announcements = Announcements::findOrFail($id);
        return view('pengumuman.show', compact('announcements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcements = Announcements::findOrFail($id);

        return view('pengumuman.edit', compact('announcements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());

        $add = Announcements::findOrFail($id);
        $add->no = $request["no"];
        $add->waktu = $request["waktu"];
        $add->kegiatan = $request["kegiatan"];
        $add->save();

        return redirect('/admin/pengumuman/announcements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Announcements::destroy($id);
        return redirect('/admin/pengumuman/announcements');
    }
}
