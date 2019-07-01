<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
        $kategori  = Kategori::all();
        return view('pages.kategori.kategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['kategori' => 'required']);

        $kat = new Kategori();
        $kat->kategori = $request->kategori;
        $kat->save();
        return redirect()->route('kategori')->with('create', 'Berhasil Menambahkan Kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori  = Kategori::find($id);
        return view('pages.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,['kategori' => 'required']);

        $kat = Kategori::find($id);
        $kat->kategori = $request->kategori;
        $kat->status = $request->status;
        $kat->update();
        return redirect()->route('kategori')->with('update', 'Berhasil Mengupdate Kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat = Kategori::find($id);
        $kat->update(['status' => '0']);
        return redirect()->route('kategori')->with('delete', 'Berhasil Menghapus Kategori');
    }
}
