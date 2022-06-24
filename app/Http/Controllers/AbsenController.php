<?php

namespace App\Http\Controllers;
use App\Models\karyawan;
use App\Models\absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $karyawan=karyawan::all();
      
        return view('absen/index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan=karyawan::all();
        $absen=absen::all();
        return view('absen/create',compact('absen','karyawan'));
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
            'karyawan_id'=>'required',
            'bulan'=>'required',
            'tahun'=>'required',
            'jumlah_masuk'=>'required'
            
        ]);

        //karyawan::create($request->all());
        absen::create([
            'karyawan_id'=>$request['karyawan_id'],
            'bulan'=>$request['bulan'],
            'tahun'=>$request['tahun'],
            'jumlah_masuk'=>$request['jumlah_masuk']
        ]);

        return redirect('/')->with('status','Data absen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(absen $absen)
    {
        $karyawan=karyawan::all();
        return view('absen.show', compact('absen','karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(absen $absen)
    {
        $karyawan=karyawan::all();
        return view('absen.edit', compact('absen','karyawan'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, absen $absen)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        absen::where('id',$absen->id)
        ->update([
        'karyawan_id'=>$request->karyawan_id,
        'bulan'=>$request->bulan,
        'tahun'=>$request->tahun,
        'jumlah_masuk'=>$request->jumlah_masuk
        ]);
        return redirect('/absen')->with('status', 'Data absen Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(absen $absen)
    {
        absen::destroy($absen->id);
        return redirect('absen')->with('status','Data absen Berhasil Dihapus');
    }
}