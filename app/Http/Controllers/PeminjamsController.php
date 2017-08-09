<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjam;
use App\Barang;
use App\Anggota;
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
       $peminjam = peminjam::with('barang')->get();
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
    }
}
