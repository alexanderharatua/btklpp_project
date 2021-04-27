<?php

namespace App\Http\Controllers;


use App\Models\Downloads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect, Response;
use PDF;
use File;

use Yajra\DataTables\DataTables;

class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('download.index');
        // $data = Downloads::latest()->paginate(5);
        // return view('download.index', compact('data'))
        //             ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function data(Request $request)
    {
            $data = Downloads::all();
            if($request->ajax()){
                return Datatables::of($data)
                    
                ->addColumn('action', function ($data) {
                    return "
                    <a href='/admin/unduh/downloads/$data->id' >
                    <button type='submit' class='btn btn-primary btn-sm' value='show'>
                    <i class='fa fa-eye'></i></button>
                    </a>
                    
                    <a href='/admin/unduh/downloads/edit/$data->id'  >
                    <button type='submit' class='btn btn-success btn-sm' value='submit'>
                    <i class='fa fa-edit'></i></button>
                    </a>
                   
                    <button type='button' name='delete' id='$data->id' class='delete btn btn-danger btn-sm'>
                    <i class='fa fa-trash'></i></button>

                    ";
                    })
                ->rawColumns(array("action"))
                ->addIndexColumn()
                ->make(true);
            }
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('download.create');
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
                'no'            => 'required',
                'nama_dokumen'  => 'required',
                'jenis_dokumen' => 'required',
                'file'          => 'required|file|mimes:doc,xlsx,pdf,docx,zip',
            ]);

            if ($validator->fails()) {
                return redirect('/admin/unduh/downloads/create')
                                ->with('success', ' Gagal menambahkan, periksa jenis dokumen Anda!')
                                ->withInput();
            }

            // $request->validate([
            //     'no'            => 'required',
            //     'nama_dokumen'  => 'required',
            //     'jenis_dokumen' => 'required',
            //     'file'          => 'required|file|mimes:doc,xlsx,pdf,docx,zip',
            // ]);


            $form_data = new Downloads();
    
            $file = $request->file('file');
    
            $new_name = $file->getClientOriginalName();
            $file->move(\public_path('images'), $new_name);
            $form_data = array(
                'no'            => $request->no,
                'nama_dokumen'  => $request->nama_dokumen,
                'jenis_dokumen' => $request->jenis_dokumen,
                'file'          => $new_name
            );
    
            Downloads::create($form_data);
            return redirect('/admin/unduh/downloads')->with('success', ' File download berhasil ditambahkan!');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Downloads::findOrFail($id);
        return view('download.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Downloads::findOrFail($id);

        return view('download.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Downloads::find($id);

        $data->no = $request->input('no');
        $data->nama_dokumen = $request->input('nama_dokumen');
        $data->jenis_dokumen = $request->input('jenis_dokumen');

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $new_name = $file->getClientOriginalName();
            $destinationPath = (public_path('tes/img/file'));
            $file->move($destinationPath, $new_name);
            $data->file = $new_name;
        }

        $data->save();


        return redirect('/admin/unduh/downloads')->with('success', ' Data berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Downloads  $downloads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Downloads::destroy($id);
        // return back()->with('success','Post deleted successfully');
        $post = Downloads::where('id',$id)->delete();
        return Response::json($post);
    }
}
