<?php

namespace App\Http\Controllers;

use App\Models\Kesenian;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KesenianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexKesenian()
    {
       $data = Kesenian::all();
       return view('kesenian', compact('data'));
    }

    public function getSemuaKesenian(){
        $data = Kesenian::all();
        return response()->json([
            'message' => 'Sukses',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   

        $request->validate(([
            'gambar_kesenian'=>'required',
            'nm_kesenian'=>'required',
            'deskripsi'=>'required'
        ]));

        $kesenian = new Kesenian();
        if ($request->hasFile('gambar_kesenian')) {
            $file = $request->file('gambar_kesenian');
            $filename = "storage/kesenian/" . $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $file->storeAs('kesenian', $name, 'public');
            $kesenian->gambar_kesenian = $filename;
        }
        $kesenian -> nm_kesenian = $request->input('nm_kesenian');
        $kesenian -> deskripsi = $request->input('deskripsi');
        $kesenian -> save(); 
            
            // return "Data Wisata berhasil ditambahkan";
        return redirect('/kesenian')->with('success', 'Data Kesenian berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = Kesenian::find($id);
        // dd($wisata);
        return view('edit.kesenianedit',compact('kesenian'));
    }


    public function update(Request $request, $id)
    {
        
        $kesenian = Kesenian::find($id);
        if ($request->hasFile('gambar_kesenian')) {
            $file = $request->file('gambar_kesenian');
            $filename = "storage/kesenian/". $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $file->storeAs('kesenian',$name,'public');
            $kesenian->gambar_kesenian = $filename;  
        }

        $kesenian->nm_kesenian = $request->input('nm_kesenian');
        $kesenian->deskripsi = $request->input('deskripsi');        
        $kesenian -> save();

        return redirect('/kesenian')->with('success', 'Data Kesenian berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataRumah  $dataRumah
     * @return \Illuminate\Http\Response
     */
    public function deleteKesenian($id)
    {
        $kuliner = Kesenian::find($id);
        $kuliner->delete();
        return redirect('/kesenian')->with('success', 'Data Kuliner berhasil dihapus');
    }
}
