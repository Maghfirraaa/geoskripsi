<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexFasilitas()
    {
       $data = Fasilitas::all();
       return view('fasilitas', compact('data'));
    }

    public function getSemuaFasilitas(){
        $data = Fasilitas::all();
        return response()->json([
            'message' => 'Sukses',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $request->validate(([
            'nm_fasilitas'=>'required',
            'kategori'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]));

        // Simpan data ke dalam database
        $fasilitas = new Fasilitas();
        $fasilitas->nm_fasilitas = $request->input('nm_fasilitas');
        $fasilitas->kategori= $request->input('kategori');
        $fasilitas->alamat= $request->input('alamat');
        $fasilitas->telepon= $request->input('telepon');
        // dd($fasilitas);
        $fasilitas->save();        
            
            // return "Data Wisata berhasil ditambahkan";
        return redirect('/fasilitas')->with('success', 'Data fasilitas berhasil ditambahkan');
    }


    public function edit($id)
    {
        $item = Fasilitas::find($id);
        // dd($wisata);
        return view('edit.fasilitasedit',compact('fasilitas'));
    }


    public function update(Request $request, $id)
    {
        
        $fasilitas = Fasilitas::find($id);
        $fasilitas->nm_fasilitas = $request->input('nm_fasilitas');
        $fasilitas->kategori = $request->input('kategori');
        $fasilitas->alamat = $request->input('alamat');
        $fasilitas->telepon = $request->input('telepon');
        $fasilitas -> save();

        return redirect('/fasilitas')->with('success', 'Data Fasilitas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteFasilitas($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        return redirect('/fasilitas')->with('success', 'Data fasilitas berhasil dihapus');
    }
}
