@extends('templates.default')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Peminjaman</a></li>
                        <li class="breadcrumb-item active">Edit Peminjaman</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Add Peminjaman</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('peminjaman.update', $pem->id)}}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Judul Buku</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="buku" id="select" class="form-control">
                                            @foreach($buku as $b)
                                                <option value="{{$b->id}}"@if($b->id == $pem->id_buku)selected @endif>{{$b->nama_buku}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="nama" value="{{$pem->nama}}"
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
                                            <option value="Laki-Laki"@if($pem->jk == 'Laki-Laki'){{"selected"}}@endif>Laki-Laki</option>
                                            <option value="Perempuan"@if($pem->jk == 'Perempuan'){{"selected"}}@endif>Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Alamat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="alamat" class="form-control {{$errors->has('nama')?'is-invalid':''}}">{{$pem->alamat}}</textarea>
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
                                               value="{{ $pem->tgl_pinjam }}">
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
                                               value="{{ $pem->tgl_kembali }}">
                                        @if ($errors->has('tgl_kembali'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('tgl_kembali') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="masa" id="select" class="form-control">
                                            <option value="1" @if($pem->masa == '1'){{"selected"}} @endif>Pinjam</option>
                                            <option value="0" @if($pem->masa == '0'){{"selected"}} @endif>Selesai</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="status" id="select" class="form-control">
                                            <option value="1" @if($pem->status == '1'){{"selected"}} @endif>Aktif</option>
                                            <option value="0" @if($pem->status == '0'){{"selected"}} @endif>Tidak Aktif</option>
                                        </select>
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
@endsection
