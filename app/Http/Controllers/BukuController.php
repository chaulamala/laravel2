<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
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
        $buku = Buku::all();
        $kategori = Kategori::all();
        return view('pages.buku.data_buku', compact('buku', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pages.buku.create', compact('kategori'));
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
            'nama_buku' => 'required|min:5|max:50',
            'penerbit' => 'required',
            'pengarang' => 'required',
            'tahun' => 'required',
            'filename' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $avatar = $request->file('filename');
        $filename = time().'.'.$avatar->getClientOriginalExtension() ;
        $destinationPath = public_path('/uploads/buku');
        $avatar->move($destinationPath, $filename);

        $buku = new Buku();
        $buku->nama_buku = $request->nama_buku;
        $buku->id_kategori = $request->kategori;
        $buku->penerbit = $request->penerbit;
        $buku->pengarang = $request->pengarang;
        $buku->tahun = $request->tahun;
        $buku->filename = $filename;
        $buku->save();
        return redirect()->route('buku')->with('create', 'Berhasil Menambahkan Buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        $kategori = Kategori::all();
        return view('pages.buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_buku' => 'required|min:5|max:50',
            'penerbit' => 'required',
            'pengarang' => 'required',
            'tahun' => 'required',
            'filename' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $buku = Buku::find($id);
        $buku->nama_buku = $request->nama_buku;
        $buku->id_kategori = $request->kategori;
        $buku->penerbit = $request->penerbit;
        $buku->pengarang = $request->pengarang;
        $buku->tahun = $request->tahun;
        $avatar = $request->file('filename');
        if ($avatar == ''){
            $buku->filename = $request->old_filename;
        }else{
            $filename = time().'.'.$avatar->getClientOriginalExtension() ;
            $destinationPath = public_path('/uploads/buku');
            $avatar->move($destinationPath, $filename);
            $buku->filename = $filename;
        }
        $buku->update();
        return redirect()->route('buku')->with('update', 'Berhasil Mengupdate Buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->update(['status' => '0']);
        return redirect()->route('buku')->with('delete', 'Berhasil Menghapus Buku');
    }
}
