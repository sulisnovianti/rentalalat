<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = Barang::all();
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('barang.create');
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
         $barang = new barang;
        $barang->jenis_barang= $request->a;
        $barang->nama_barang= $request->b;
        $barang->stok = $request->c;
        $barang->jumlah = $request->d;
        $barang->save();
        return redirect('barang');
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
          $barang = barang::findOrFail($id);
        return view('barang.show',compact('barang'));
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
        $barang = barang::findOrFail($id);
        return view('barang.edit',compact('barang'));
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
          $barang = barang::findOrFail($id);
        $barang->jenis_barang= $request->a;
        $barang->nama_barang= $request->b;
        $barang->stok = $request->c;
        $barang->jumlah = $request->d;
        $barang->save();
        return redirect('barang');
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
        $barang = barang::findOrFail($id);
        $barang->delete();
        return redirect('barang');   

    }
}
