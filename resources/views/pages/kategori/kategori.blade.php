@extends('templates.default')
@section('content')

    <section class="content-header">
        @if($message = Session::get('create'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><strong>{{$message}}</strong>
            </div>
        @endif

        @if($message = Session::get('update'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><strong>{{$message}}</strong>
            </div>
        @endif

        @if($message = Session::get('delete'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i><strong>{{$message}}</strong>
            </div>
        @endif

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Buku</a></li>
                        <li class="breadcrumb-item active">Data Buku</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Kategori
                            <a href="{{ route('kategori.create')}}" class="btn btn-primary btn-xs float-right"><i class="fa fa-plus"></i> Add</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($kategori as $kategori)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$kategori->kategori}}</td>
                                    @if($kategori->status == '1')
                                        <td><span class="badge badge-success">Aktif</span></td>
                                    @else
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                    @endif
                                    <td>
                                        <a href="{{ route('kategori.edit', $kategori->id)}}" class="btn-sm btn-warning"><i
                                                    class="fa fa-edit"></i></a>
                                        @if($kategori->status == '1')
                                            <a href="{{ route('kategori.destroy', $kategori->id)}}"
                                               onclick="return confirm('apakah anda yakin delete file ni?')"
                                               class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection


