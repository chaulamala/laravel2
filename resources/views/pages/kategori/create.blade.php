@extends('templates.default')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                        <li class="breadcrumb-item active">Add Kategori</li>
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
                            <h3 class="card-title">Add kategori</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('kategori.store')}}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name-input" class=" form-control-label">kategori</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        {{$errors->has('kategori')?'is-invalid':''}}
                                        <input type="text" id="text-input" name="kategori" value="{{ old('kategori') }}" class="form-control">
                                        @if ($errors->has('kategori'))
                                            <span class="invalid-feedback" role="alert">
                                                <p><b>{{ $errors->first('kategori') }}</b></p>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                                    <a href="{{route('kategori')}}" class="btn btn-default btn-sm"><i class="fa fa-ban"></i> Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
@endsection
