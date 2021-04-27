<?php

namespace App\Http\Controllers;

use App\Models\Buletin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Redirect;
use File;

class BuletinController extends Controller
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
        return view('buletin.index');
    }

    public function data()
    {
            $data = Buletin::all();
            return Datatables::of($data)
                    
                ->addColumn('action', function ($data) {
                    return 
                    " <a href='/admin/buletin/buletins/$data->id' >
                    <button type='submit' class='btn btn-primary btn-sm' value='delete'>
                    <i class='fa fa-eye'></i></button>
                    </a>
                    
                    <a href='/admin/buletin/buletins/edit/$data->id'  >
                    <button type='submit' class='btn btn-success btn-sm' value='delete'>
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
        return view('buletin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_buletin'  => 'required',
            'isi_buletin' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,zip|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->with('success', ' Gagal menambahkan, periksa jenis gambar Anda!')
                            ->withInput();
        }

        // $request->validate([
        //     'judul_buletin'      => 'required',
        //     'isi_buletin'        => 'required',
        //     'gambar'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,zip|max:2048',
        // ]);

    
        $file = $request->file('gambar');
        $new_name = $file->getClientOriginalName();
        $destinationPath = (public_path('buletin'));
        $file->move($destinationPath, $new_name);

        $form_data = array(
            'judul_buletin'      => $request->judul_buletin,
            'isi_buletin'        => $request->isi_buletin,
            'gambar'            => $new_name,
        );

        Buletin::insert($form_data);
        return Redirect::to('/admin/buletin/buletins')
        ->with('success','Buletin berhasil ditambahkan baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Buletin::findOrFail($id);

        return view('buletin.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Buletin::findOrFail($id);
        return view('buletin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Buletin::find($id);

        $data->judul_buletin = $request->input('judul_buletin');
        $data->isi_buletin = $request->input('isi_buletin');
 
        if($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $new_name = $file->getClientOriginalName();
            $destinationPath = (public_path('buletin'));
            $file->move($destinationPath, $new_name);
            $data->gambar = $new_name;
        }
 
        $data->save();           // inilah method paling joss
 
         return Redirect::to('/admin/buletin/buletins')
         ->with('success','Buletin berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buletin::where('id',$id)->delete();
        return Redirect::to('/admin/buletin/buletins')->with('success','Field berhasil dihapus!');
    }
}
