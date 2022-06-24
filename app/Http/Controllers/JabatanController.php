<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan=jabatan::all();        
        return view('jabatan/index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan/create');
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
            'jabatan'=>'required',
            'gapok'=>'required',
            'tunjangan'=>'required'

        ]);
        jabatan::create($request->all());

        return redirect('/jabatan')->with('status','Data Berhasil Ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(jabatan $jabatan)
    {
        return view ('jabatan/show',compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(jabatan $jabatan)
    {
        return view('jabatan/edit',compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jabatan $jabatan)
    {
        jabatan::where('id',$jabatan->id)
        ->update(['jabatan'=>$request->jabatan, 'gapok'=>$request->gapok, 'tunjangan'=>$request->tunjangan]);
                  
        return redirect('/jabatan')->with('status','Data Berhasil Diubah');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(jabatan $jabatan)
    {
        jabatan::destroy($jabatan->id);
        return redirect('jabatan')->with('status','Data Berhasil Dihapus');
    }
}