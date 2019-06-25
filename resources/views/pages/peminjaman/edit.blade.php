@extends('templates.default');

@section('content')


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Peminjaman</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">ID Anggota</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                        <small class="form-text text-muted">Kolom ini tidak boleh kosong</small>
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama Anggota</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Judul Buku</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Tanggal Peminjaman</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Tanggal Pengembalian</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Kategori</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                    </div>
                </div>

            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </div>
</div>

@endsection