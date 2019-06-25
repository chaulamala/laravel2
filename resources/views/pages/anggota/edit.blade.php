@extends('templates.default');

@section('content')


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Anggota</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">ID Anggota</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                        <small class="form-text text-muted">Kolom Ini tidak boleh kosong</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="name-input" class=" form-control-label">Nama</label>
                    </div>
                     <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Jenis Kelamin</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Silahkan pilih</option>
                            <option value="1">Perempuan</option>
                            <option value="2">Laki-Laki</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="-input" class=" form-control-label">No HP</label>
                    </div>
                     <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="" class="form-control"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Simpan
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Batal
            </button>
        </div>
    </div>
</div>


@endsection