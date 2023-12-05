<?php

namespace App\Http\Controllers;
use App\Models\Kerajinan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KerajinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexKerajinan()
    {
       $data = Kerajinan::all();
       return view('kerajinan', compact('data'));
    }

    public function getSemuaKerajinan(){
        $data = Kerajinan::all();
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
            'gambar_kerajinan'=>'required',
            'nm_kerajinan'=>'required',
            'deskripsi'=>'required'
        ]));
        // Simpan data ke dalam database
        $kerajinan = new Kerajinan();
        if ($request->hasFile('gambar_kerajinan')) {
            $file = $request->file('gambar_kerajinan');
            $filename = "storage/kerajinan/". $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $file->storeAs('kerajinan',$name,'public');
            $kerajinan->gambar_kerajinan = $filename;  
        }
        $kerajinan->nm_kerajinan = $request->input('nm_kerajinan');
        $kerajinan->deskripsi = $request->input('deskripsi');
        $kerajinan->save();        
            
            // return "Data Wisata berhasil ditambahkan";
        return redirect('/kerajinan')->with('success', 'Data Kerajinan berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $item = Kerajinan::find($id);
        // dd($wisata);
        return view('edit.kerajinanedit',compact('kerajinan'));
    }


    public function update(Request $request, $id)
    {
        
        $kerajinan = Kerajinan::find($id);
        if ($request->hasFile('gambar_kerajinan')) {
            $file = $request->file('gambar_kerajinan');
            $filename = "storage/kerajinan/". $file->getClientOriginalName();
            $name = $file->getClientOriginalName();
            $file->storeAs('kerajinan',$name,'public');
            $kerajinan->gambar_kerajinan = $filename;  
        }

        $kerajinan->nm_kerajinan = $request->input('nm_kerajinan');
        $kerajinan->deskripsi = $request->input('deskripsi');        
        $kerajinan -> save();

        return redirect('/kerajinan')->with('success', 'Data Kerajinan berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteKerajinan($id)
    {
        $kerajinan = Kerajinan::find($id);
        $kerajinan->delete();
        return redirect('/kerajinan')->with('success', 'Data Kerajinan berhasil dihapus');
    }
}
