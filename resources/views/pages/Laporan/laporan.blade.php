@extends('templates.default');


@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<div class="table-responsive table--no-card m-b-30">
		        <table class="table table-borderless table-striped table-earning">
		        	<a href="{{ route('laporan.ViewCreate')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
		            <thead>
		                <tr>
		                    <th class="col-lg-1">No</th>
		                    <th class="col-lg-1">ID Anggota</th>
		                    <th class="col-lg-2">Nama</th>
		                    <th class="col-lg-2">Judul Buku</th>
		                    <th class="col-lg-2">Kategori</th>
		                    <th class="col-lg-2">Tanggal Peminjaman</th>
		                    <th class="col-lg-2">Tanggal Pengembalian</th>
		                    <th class="col-lg-1">Aksi</th>
		                </tr>
		            </thead>
		            <tbody>
		              <tr>
		                    <td>1</td>
		                    <td>16090084</td>
		                    <td>Chaula Noor Mala</td>
		                    <td>Senja</td>
		                    <td>Fiksi</td>
		                    <td>22-03-2019</td>
		                    <td>28-03-2019</td>
		                    <td>
		                    	<a href="{{ route('peminjaman.edit')}}" class="btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
		                    	<a href="" class="btn-sm btn-danger"><i class="fas fa-times" ></i></a>
		                    </td>
		                </tr>
		            </tbody>
		        </table>
		    </div>
        </div>
    </div>
</div>
    
@endsection