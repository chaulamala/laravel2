@extends('templates.default');


@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<div class="table-responsive table--no-card m-b-30">
		        <table class="table table-borderless table-striped table-earning">
		        	<a href="{{ route('buku.ViewCreate')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
		            <thead>
		                <tr>
		                    <th>No</th>
		                    <th>ID Buku</th>
		                    <th>Judul Buku</th>
		                    <th>Kategori</th>
		                    <th>Penerbit</th>
		                    <th class="text-right">Aksi</th>
		                </tr>
		            </thead>
		            <tbody>
		                <tr>
		                    <td>1</td>
		                    <td>100393</td>
		                    <td>Hujan</td>
		                      <td>Novel Fiksi</td>
		                        <td>Gramedia</td>
		                    <td>
		                    	<a href="{{ route('buku.edit')}}" class="btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
		                    	<a href="" class="btn-sm btn-danger"><i class="fas fa-times" ></i></a>
		                    </td>
		                </tr>

		                <tr>
		                    <td>2</td>
		                    <td>100878</td>
		                    <td>Senja</td>
		                      <td>Fiksi</td>
		                        <td>Pustaka Ilmu</td>
		                    <td>
		                    	<a href="{{ route('buku.edit')}}" class="btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
		                    	<a href="" class="btn-sm btn-danger"><i class="fas fa-times" ></i></a>
		                    </td>
		                </tr>

		                <tr>
		                    <td>3</td>
		                    <td>100786</td>
		                    <td>Hujan dikala Senja</td>
		                      <td>Novel Fiksi</td>
		                        <td>Media Pustaka</td>
		                    <td>
		                    	<a href="{{ route('buku.edit')}}" class="btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
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