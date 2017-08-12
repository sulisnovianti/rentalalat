<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kembali;
use App\peminjam;
class KembalisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $kembali = Kembali::all();
        return view('kembali.index',compact('kembali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $kembali = kembali::all();
         $peminjam = peminjam::all();
        return view('kembali.create',compact('kembali','peminjam'));
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
        $kembali = new kembali;
        $kembali->peminjam_id = $request->b;
        $kembali->tgl_kembali = $request->a;
        $kembali->telat = $request->c;
        $kembali->denda = $request->d;
        $kembali->save();
        return redirect('kembali');
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
          $peminjam = peminjam::all(); 
           $kembali = kembali::findOrFail($id);
        return view('kembali.show',compact('peminjam','kembali'));
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
         $kembali = kembali::findOrFail($id);
         $peminjam = peminjam::all();
        return view('peminjam.edit',compact('peminjam','kembali'));
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
         $kembali = kembali::findOrFail($id);
        $kembali->peminjam_id = $request->b;
        $kembali->tgl_kembali = $request->a;
        $kembali->telat = $request->c;
        $kembali->denda = $request->d;
        $kembali->save();
        return redirect('kembali');
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
          $kembali = kembali::findOrFail($id);
        $kembali->delete();
        return redirect('kembali');
    }
}
