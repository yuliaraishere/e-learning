<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MateriController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Materi::all();
        return view('dashboard.master.materi.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [            
            'id_materi'     => 'required',
            'nm_materi'     => 'required',
            'nm_uploader'    => 'required',            
            'stts_materi'   => 'required'
        ]);

        //create post
        Materi::create([
            'id_materi'     => $request->id_materi,
            'nm_materi'     => $request->nm_materi,
            'nm_uploader'     => $request->nm_uploader,
            'stts_materi'   => $request->stts_materi
            
        ]);

        // //redirect to index
        return redirect()->route('materi')->with(['success' => 'Pengajar successfully added!']);
    }

    public function edit($id)
    {
        $data = Materi::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_materi'     => 'required',
            'nm_materi'     => 'required',
            'nm_uploader'    => 'required',            
            'stts_materi'   => 'required'
        ]);

        $data = Materi::find($id);
        $data->id_materi = $request->id_materi;
        $data->nm_materi = $request->nm_materi;
        $data->nm_uploader = $request->nm_uploader;        
        $data->stts_materi = $request->stts_materi;
        $data->update();
        return response()->json(['success' => 'Pengajar successfully updated!']);
    }

    public function destroy($id)
    {
        Materi::find($id)->delete();

        return redirect()->route('materi')->with(['success' => 'Pengajar successfully deleted!']);
    }
}
