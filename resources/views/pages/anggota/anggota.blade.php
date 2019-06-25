@extends('templates.default');


@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<div class="table-responsive table--no-card m-b-30">
		        <table class="table table-borderless table-striped table-earning">
		        	<a href="{{ route('anggota.ViewCreate')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
		            <thead>
		                <tr>
		                 
		                    <th class="col-lg-1">No</th>
		                    <th class="col-lg-1">ID Anggota</th>
		                    <th class="col-lg-2">Nama</th>
		                    <th class="col-lg-2">Jenis Kelamin</th>
		                    <th class="col-lg-3">Alamat</th>
		                    <th class="col-lg-2">No.HP</th>
		                    <th class="col-lg-2">Aksi</th>
		                </tr>
		            </thead>
		            <tbody>
		                <tr>
		                    <td>1</td>
		                    <td>16090084</td>
		                    <td>Chaula Noor Mala</td>
		                    <td>Perempuan</td>
		                    <td>Jl.Seroja, Balapulang</td>
		                    <td>082328746059</td>
		                    <td>
		                    	<a href="{{ route('anggota.edit')}}" class="btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
		                    	<a href="" class="btn-sm btn-danger"><i class="fas fa-times" ></i></a>
		                    </td>
		                </tr>

		                <tr>
		                    <td>2</td>
		                    <td>16090073</td>
		                    <td>Mala</td>
		                    <td>Perempuan</td>
		                      <td>Jl.Senopati, Brebes</td>
		                        <td>082324567089</td>
		                    <td>
		                    	<a href="{{ route('anggota.edit')}}" class="btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
		                    	<a href="" class="btn-sm btn-danger"><i class="fas fa-times" ></i></a>
		                    </td>
		                </tr>

		                <tr>
		                    <td>3</td>
		                    <td>16090048</td>
		                    <td>Faedi</td>
		                    <td>Laki-Laki</td>
		                    <td>Jl.Semboja, Pemalang</td>
		                        <td>082324567898</td>
		                    <td>
		                    	<a href="{{ route('anggota.edit')}}" class="btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
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