<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;


use Yajra\DataTables\DataTables;
class AnnouncementController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __invoke(Request $request)
    {
        return "Welcome to our homepage";
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcements = Announcements::all();

        return view('pengumuman.index', ["announcements" => $announcements]);
    }
    public function data()
    {
            $data = Announcements::all();
            return Datatables::of($data)
                    
                ->addColumn('action', function ($data) {
                    return 
                    " <a href='/admin/berita/news/$data->id' >
                    <button type='submit' class='btn btn-primary btn-sm' value='delete'>
                    <i class='fa fa-eye'></i></button>
                    </a>
                    
                    <a href='/admin/berita/news/edit/$data->id'  >
                    <button type='submit' class='btn btn-success btn-sm' value='delete'>
                    <i class='fa fa-edit'></i></button>
                    </a>

                    <a href='/admin/berita/news/destroy/$data->id' >
                    <button type='submit' class='btn btn-danger btn-sm' value='delete'>
                    <i class='fa fa-trash'></i></button>
                    </a>
                    ";
                    })
                ->rawColumns(array("action"))
                ->make(true);
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
