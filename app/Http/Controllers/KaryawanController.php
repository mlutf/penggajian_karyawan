<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();

    
        return view('karyawan.index',compact('karyawan'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan=Jabatan::all();
        return view('karyawan/create', compact('jabatan'));
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
            'nama'=>'required',
            'jk'=>'required',
            'tgl_lahir'=>'required',
            'agama' =>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'pendidikan_terakhir'=>'required',
            'email'=>'required',
            'foto'=>'image|file|max:2048|mimes:jpg,png,jpeg',
            'jabatan_id'=>'required',
        ]);

        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }


        //pasien::create($request->all());
        karyawan::create([
            'nama'=>$request['nama'],
            'jk'=>$request['jk'],
            'tgl_lahir'=>$request['tgl_lahir'],
            'agama'=>$request['agama'],
            'alamat'=>$request['alamat'],
            'no_hp'=>$request['no_hp'],
            'pendidikan_terakhir'=>$request['pendidikan_terakhir'],
            'email'=>$request['email'],
            'foto'=>$imgName,
            'jabatan_id'=>$request['jabatan_id'],
        ]);

        return redirect('/karyawan')->with('status','Data Karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view ('karyawan/show',compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        $jabatan = Jabatan::all();
        return view('karyawan/edit', compact('karyawan', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        
        karyawan::where('id',$karyawan->id)
        ->update(['nama'=>$request->nama,
                   'jk'=>$request->jk,
                   'tgl_lahir'=>$request->tgl_lahir,
                   'agama'=>$request->agama,
                   'alamat'=>$request->alamat,
                   'no_hp'=>$request->no_hp,
                   'pendidikan_terakhir'=>$request->pendidikan_terakhir,
                   'email'=>$request->email,
                   'jabatan_id'=>$request->jabatan_id,
                   ]);
        return redirect('/karyawan')->with('status','Data Karyawan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        Karyawan::destroy($karyawan->id);
        return redirect('karyawan')->with('status','Data Berhasil Dihapus');
    }
}