@extends('templates.default')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">buku</a></li>
                        <li class="breadcrumb-item active">Add buku</li>
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
                            <h3 class="card-title">Add buku</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('buku.store')}}" method="post" enctype="multipart/form-data"
                                  class="form-horizontal">
                                {{csrf_field()}}

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nama Buku</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="nama_buku"
                                               class="form-control {{$errors->has('nama_buku')?'is-invalid':''}}"
                                               value="{{ old('nama_buku') }}">
                                        @if ($errors->has('nama_buku'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('nama_buku') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Pengarang</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="pengarang"
                                               class="form-control {{$errors->has('pengarang')?'is-invalid':''}}"
                                               value="{{ old('pengarang') }}">
                                        @if ($errors->has('pengarang'))
                                            <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('pengarang') }}</b></p>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Penerbit</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="penerbit"
                                               class="form-control {{$errors->has('penerbit')?'is-invalid':''}}"
                                               value="{{ old('penerbit') }}">
                                        @if ($errors->has('penerbit'))
                                            <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('penerbit') }}</b></p>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Tahun</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="text-input" name="tahun"
                                               class="form-control {{$errors->has('tahun')?'is-invalid':''}}"
                                               value="{{ old('tahun') }}">
                                        @if ($errors->has('tahun'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('tahun') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Kategori</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="kategori" class="form-control">
                                            @foreach($kategori as $kat)
                                                <option value="{{$kat->id}}">{{$kat->kategori}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Foto</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" class="form-control {{$errors->has('filename')?'is-invalid':''}}"
                                               name="filename" onchange="loadfile(event)">
                                        </br>
                                        <img id="output" class="img-fluid" height="100" width="100">
                                        @if ($errors->has('filename'))
                                            <span class=" invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('filename') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                                class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <a href="{{route('buku')}}" class="btn btn-default btn-sm"><i class="fa fa-ban"></i>
                                        Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
@endsection

<script>
    var loadfile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>