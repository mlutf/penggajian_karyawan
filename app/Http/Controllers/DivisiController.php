<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisi = Divisi::all();

    
        return view('divisi.index',compact('divisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan=Karyawan::all();
        return view('divisi/create', compact('karyawan'));
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
            'unit_kerja'=>'required',
            'bagian'=>'required',
            'karyawan_id'=>'required'

        ]);
        Divisi::create($request->all());

        return redirect('/divisi')->with('status','Data Berhasil Ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        $karyawan = Karyawan::all();
        return view('divisi/show', compact('divisi', 'karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisi $divisi)
    {
        $karyawan = Karyawan::all();
        return view('divisi/edit', compact('divisi', 'karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        Divisi::where('id',$divisi->id)
        ->update(['unit_kerja'=>$request->unit_kerja, 'bagian'=>$request->bagian, 'karyawan_id'=>$request->karyawan_id]);
                  
        return redirect('/divisi')->with('status','Data Berhasil Diubah');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        Divisi::destroy($divisi->id);
        return redirect('divisi')->with('status','Data Berhasil Dihapus');
    }
}