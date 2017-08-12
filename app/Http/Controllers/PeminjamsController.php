<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjam;
use App\Barang;
use App\Anggota;
use App\kembali;

class PeminjamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $peminjam = peminjam::all();
        return view('peminjam.index',compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $anggota = Anggota::all();
          $barang = Barang::all();
        return view('peminjam.create',compact('anggota','barang'));
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
        $peminjam = new peminjam;
        $peminjam->tgl_pinjam = $request->a;
        $peminjam->anggota_id = $request->b;
        $peminjam->jumlah_hari = $request->c;
        $peminjam->barang_id = $request->d;
        $peminjam->save();
        return redirect('peminjam');
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
           $anggota = Anggota::all();
          $barang = Barang::all(); 
           $peminjam = peminjam::findOrFail($id);
        return view('peminjam.show',compact('peminjam','anggota','barang'));
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
        $kembali = kembali::all();
         $anggota = Anggota::all();
          $barang = Barang::all();         
         $peminjam = peminjam::findOrFail($id);
        return view('peminjam.edit',compact('peminjam','anggota','barang','kembali'));
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
        $peminjam = peminjam::findOrFail($id);
        $peminjam->tgl_pinjam = $request->a;
        $peminjam->anggota_id = $request->b;
        $peminjam->jumlah_hari = $request->c;
        $peminjam->barang_id = $request->d;
        $peminjam->save();
        return redirect('peminjam');
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
        $peminjam = peminjam::findOrFail($id);
        $peminjam->delete();
        return redirect('peminjam');   

    }
}
