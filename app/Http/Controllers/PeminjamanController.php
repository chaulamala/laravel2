<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Buku;
use App\Kategori;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pem = Peminjaman::all();
        $buku = Buku::all();
        $kategori = Kategori::all();
        return view('pages.peminjaman.peminjaman', compact('buku', 'kategori', 'pem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $kategori = Kategori::all();
        return view('pages.peminjaman.create', compact('buku', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('peminjaman')->with('create', 'Berhasil Menambahkan Peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pem = Peminjaman::find($id);
        $buku = Buku::all();
        $kategori = Kategori::all();
        return view('pages.peminjaman.edit', compact('buku', 'kategori', 'pem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $pem = Peminjaman::find($id);
        $pem->id_buku = $request->buku;
        $pem->nama = $request->nama;
        $pem->jk = $request->jk;
        $pem->alamat = $request->alamat;
        $pem->tgl_pinjam = $request->tgl_pinjam;
        $pem->tgl_kembali = $request->tgl_kembali;
        $pem->masa = $request->masa;
        $pem->status = $request->status;
        $pem->update();
        return redirect()->route('peminjaman')->with('update', 'Berhasil Mengupdate Peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pem = Peminjaman::find($id);
        $pem->update(['status' => '0']);
        return redirect()->route('peminjaman')->with('delete', 'Berhasil Menghapus Peminjaman');
    }
}
