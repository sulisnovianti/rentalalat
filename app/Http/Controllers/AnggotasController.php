<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
class AnggotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $anggota = Anggota::with('peminjam')->get();
        return view('anggota.index',compact('anggota'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                 return view('anggota.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $anggota = new anggota;
        $anggota->nama= $request->a;
        $anggota->jk= $request->b;
        $anggota->status = $request->c;
       
        $anggota->save();
        return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anggota = anggota::findOrFail($id);
        return view('anggota.show',compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $anggota = anggota::findOrFail($id);
        return view('anggota.edit',compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
           $anggota = anggota::findOrFail($id);
          $anggota->nama= $request->a;
        $anggota->jk= $request->b;
        $anggota->status = $request->c;
       
        $anggota->save();
        return redirect('anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           $anggota = anggota::findOrFail($id);
        $anggota->delete();
        return redirect('anggota');   

    }
}
