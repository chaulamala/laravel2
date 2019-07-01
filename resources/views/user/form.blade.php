<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 29/06/2019
 * Time: 19:57
 */
?>

@extends('templates.user')
@section('users')
    <section class="content">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Pesan Buku</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('pinjam.store')}}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Judul Buku</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="buku" id="select" class="form-control">
                                                <option value="{{$buku->id}}">{{$buku->nama_buku}}</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="nama" value="{{old('nama')}}"
                                               class="form-control {{$errors->has('nama')?'is-invalid':''}}">
                                        @if ($errors->has('nama'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('nama') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="jk" id="select" class="form-control">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Alamat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="alamat" class="form-control {{$errors->has('nama')?'is-invalid':''}}">{{old('alamat')}}</textarea>
                                        @if ($errors->has('alamat'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('alamat') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Tanggal Peminjaman</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="text-input" name="tgl_pinjam"
                                               class="form-control {{$errors->has('tgl_pinjam')?'is-invalid':''}}"
                                               value="{{ old('tgl_pinjam') }}">
                                        @if ($errors->has('tgl_pinjam'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('tgl_pinjam') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Tanggal Pengembalian</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="text-input" name="tgl_kembali"
                                               class="form-control {{$errors->has('tgl_kembali')?'is-invalid':''}}"
                                               value="{{ old('tgl_kembali') }}">
                                        @if ($errors->has('tgl_kembali'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('tgl_kembali') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                                class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <br>
@endsection
