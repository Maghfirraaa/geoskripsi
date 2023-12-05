<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexKuliner()
    {
       $data = Kuliner::all();
       return view('kulineran', compact('data'));
    }

    public function getSemuaKuliner(){
        $data = Kuliner::all();
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
            'gambar_kuliner'=>'required',
            'nm_kuliner'=>'required',
            'deskripsi'=>'required'
        ]));

    // Simpan data ke dalam database
    $kuliner = new Kuliner();
    if ($request->hasFile('gambar_kuliner')) {
        $file = $request->file('gambar_kuliner');
        $filename = "storage/kulinerBaru/" . $file->getClientOriginalName();
        $name = $file->getClientOriginalName();
        $file->storeAs('kulinerBaru', $name, 'public');
        $kuliner->gambar_kuliner = $filename;
    }
    
    $kuliner->nm_kuliner = $request->input('nm_kuliner');
    $kuliner->deskripsi = $request->input('deskripsi');
    $kuliner->save();        

        
        // return "Data Wisata berhasil ditambahkan";
    return redirect('/kuliner')->with('success', 'Data Wisata berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = Kuliner::find($id);
        // dd($wisata);
        return view('edit.kulineredit',compact('kuliner'));
    }


    public function update(Request $request, $id)
    {
        
        $kuliner = Kuliner::find($id);
        if ($request->hasFile('gambar_kuliner')) {
            $file = $request->file('gambar_kuliner');
            $filename = "storage/kulinerBaru/". $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $file->storeAs('kulinerBaru',$name,'public');
            $kuliner->gambar_kuliner = $filename;  
        }

        $kuliner->nm_kuliner = $request->input('nm_kuliner');
        $kuliner->deskripsi = $request->input('deskripsi'); 
             
        $kuliner -> save();

        return redirect('/kuliner')->with('success', 'Data Kuliner berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataRumah  $dataRumah
     * @return \Illuminate\Http\Response
     */


    public function deleteKuliner($id)
    {
        $kuliner = Kuliner::find($id);

        if (!$kuliner) {
            return redirect('/kuliner')->with('error', 'Kuliner tidak ditemukan');
        }
        $kuliner->delete();
        return redirect('/kuliner')->with('success', 'Data Kuliner berhasil dihapus');
    }

}
