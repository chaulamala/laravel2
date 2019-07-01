<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Kategori;
use App\Peminjaman;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $buku = Buku::all();
        return view('user.index', compact('buku', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pinjam($id)
    {
        $kategori = Kategori::all();
        $buku = Buku::find($id);
        return view('user.form', compact('buku', 'kategori'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pem = new Peminjaman();
        $pem->id_buku = $request->buku;
        $pem->nama = $request->nama;
        $pem->jk = $request->jk;
        $pem->alamat = $request->alamat;
        $pem->tgl_pinjam = $request->tgl_pinjam;
        $pem->tgl_kembali = $request->tgl_kembali;
        $pem->masa = '1';
        $pem->save();
        return redirect()->route('index')->with('create', 'Anda Meminjam Buku'.$request->buku);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
