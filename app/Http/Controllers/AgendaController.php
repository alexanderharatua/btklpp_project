<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Redirect;
use File;

class AgendaController extends Controller
{
    public function __invoke(Request $request)
    {
        return "Welcome to our homepage";
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agenda.index');
    }

    public function data()
    {
            $data = Agenda::all();
            return Datatables::of($data)
                    
                ->addColumn('action', function ($data) {
                    return 
                    " <a href='/admin/agenda/agendas/$data->id' >
                    <button type='submit' class='btn btn-primary btn-sm''>
                    <i class='fa fa-eye'></i></button>
                    </a>
                    
                    <a href='/admin/agenda/agendas/edit/$data->id'  >
                    <button type='submit' class='btn btn-success btn-sm'>
                    <i class='fa fa-edit'></i></button>
                    </a>

                    <button type='button' name='delete' id='$data->id' class='delete btn btn-danger btn-sm'>
                    <i class='fa fa-trash'></i></button>
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
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_agenda'      => 'required',
            'isi_agenda'        => 'required',
            'gambar'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,zip|max:2048',
        ]);

        $file = $request->file('gambar');
        $new_name = $file->getClientOriginalName();
        $destinationPath = (public_path('agenda'));
        $file->move($destinationPath, $new_name);

        $form_data = array(
            'judul_agenda'      => $request->judul_agenda,
            'isi_agenda'        => $request->isi_agenda,
            'gambar'            => $new_name,
        );

        Agenda::insert($form_data);
        return Redirect::to('/admin/agenda/agendas')
        ->with('success','Agenda berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Agenda::findOrFail($id);

        return view('agenda.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Agenda::findOrFail($id);
        return view('agenda.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Agenda::find($id);

       $data->judul_agenda = $request->input('judul_agenda');
       $data->isi_agenda = $request->input('isi_agenda');

       if($request->hasFile('gambar')) {
           $file = $request->file('gambar');
           $new_name = $file->getClientOriginalName();
           $destinationPath = (public_path('agenda'));
           $file->move($destinationPath, $new_name);
           $data->gambar = $new_name;
       }

       $data->save();           // inilah method paling joss

        return Redirect::to('/admin/agenda/agendas')
        ->with('success','Great! Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agenda::where('id',$id)->delete();
        return Redirect::to('/admin/agenda/agendas')->with('success','Field deleted successfully');    
        //return "he";
    }
}
