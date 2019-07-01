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
                        <h3 class="card-title">Data peminjaman
                            <a href="{{ route('peminjaman.create')}}" class="btn btn-primary btn-xs float-right"><i
                                        class="fa fa-plus"></i> Add</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Buku</th>
                                <th>Nama</th>
                                <th>Tgl Pinjam</th>
                                <th>Tgl Kembali</th>
                                <th>Tgl Bts Kembali</th>
                                <th>Masa</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($pem as $pem)
                                <tr>
                                    <td>{{$no}}</td>
                                    @foreach($buku as $book)
                                        @if($book->id == $pem->id_buku)
                                            <td>{{$book->nama_buku}}</td>
                                        @endif
                                    @endforeach

                                    <td>{{$pem->nama}}</td>
                                    <td>{{$pem->tgl_pinjam}}</td>
                                    <td>{{$pem->tgl_kembali}}</td>
                                    <td>{{$pem->tgl_bts_kembali}}</td>

                                    @if($pem->masa == '1')
                                        <td><span class="badge badge-success">Pinjam</span></td>
                                    @else
                                        <td><span class="badge badge-warning">Selesai</span></td>
                                    @endif

                                    @if($pem->status == '1')
                                        <td><span class="badge badge-success">Aktif</span></td>
                                    @else
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                    @endif
                                    <td>
                                        <a href="{{ route('peminjaman.edit', $pem->id)}}" class="btn-sm btn-warning"><i
                                                    class="fa fa-edit"></i></a>
                                        @if($pem->status == '1')
                                            <a href="{{ route('peminjaman.destroy', $pem->id)}}"
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


