<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Wisata::all();
       return view('wisata', compact('data'));
    }

    public function getSemuaWisata(){
        $data = Wisata::all();
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
            'gambar_wisata'=>'required',
            'nm_wisata'=>'required',
            'kategori'=>'required',
            'alamat_wisata'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'deskripsi'=>'required',
            'fasilitas'=>'required',
            'jam_operasional'=>'required',
            'telepon'=>'required',
            'hrg_tiket'=>'required'
        ]));

    // Simpan gambar
    // Simpan data ke dalam database
    $wisata = new Wisata();
    if ($request->hasFile('gambar_wisata')) {
        $file = $request->file('gambar_wisata');
        $filename = "storage/wisata/" . $file->getClientOriginalName();
        $name = $file->getClientOriginalName();
        $file->storeAs('wisata', $name, 'public');
        $wisata->gambar_wisata = $filename;
    }
    $wisata->nm_wisata = $request->input('nm_wisata');
    $wisata->kategori = $request->input('kategori');
    $wisata->alamat_wisata = $request->input('alamat_wisata');
    $wisata->latitude = $request->input('latitude');
    $wisata->longitude = $request->input('longitude');
    $wisata->deskripsi = $request->input('deskripsi');
    $wisata->fasilitas = $request->input('fasilitas');
    $wisata->jam_operasional = $request->input('jam_operasional');
    $wisata->telepon = $request->input('telepon');
    $wisata->hrg_tiket = $request->input('hrg_tiket');

    $wisata->save();        

        
        // return "Data Wisata berhasil ditambahkan";
    return redirect('/wisata')->with('success', 'Data Wisata berhasil ditambahkan');
    }


    public function edit($id)
    {
        $item = Wisata::find($id);
        // dd($wisata);
        return view('edit.wisataedit',compact('wisata'));
    }


    public function update(Request $request, $id)
    {
        
        $wisata = Wisata::find($id);
        if ($request->hasFile('gambar_wisata')) {
            $file = $request->file('gambar_wisata');
            $filename = "storage/Wisata/". $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $file->storeAs('Wisata',$name,'public');
            $wisata->gambar_wisata = $filename;  
        }

        $wisata->nm_wisata = $request->input('nm_wisata');
        $wisata->alamat_wisata = $request->input('alamat_wisata');
        $wisata->latitude = $request->input('latitude');
        $wisata->longitude = $request->input('longitude');
        $wisata->deskripsi = $request->input('deskripsi');
        $wisata->fasilitas = $request->input('fasilitas');
        $wisata->jam_operasional = $request->input('jam_operasional');
        $wisata->telepon = $request->input('telepon');
        $wisata->hrg_tiket = $request->input('hrg_tiket');
        $wisata -> save();

        return redirect('/wisata')->with('success', 'Data Wisata berhasil diperbarui');
    }


    public function delete($id)
    {
        $wisata = Wisata::find($id);

        if (!$wisata) {
            return redirect('/wisata')->with('error', 'Wisata tidak ditemukan');
        }
        $wisata->delete();
        return redirect('/wisata')->with('success', 'Data Wisata berhasil dihapus');
    }

}
