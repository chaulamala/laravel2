<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 29/06/2019
 * Time: 19:28
 */
?>

@extends('templates.user')
@section('users')

    <!--============================= FEATURED PLACES =============================-->
    <section class="main-block light-bg">
        <div class="container">

            @if($message = Session::get('create'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="icon fa fa-check"></i><strong>{{$message}}</strong>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Featured Places</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($buku as $buku)
                    <div class="col-md-4 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href="">
                                <img src="{{asset('uploads/buku/'. $buku->filename)}}" class="img-fluid" alt="#" style="height: 220px"; width="70px">
                                @foreach($kategori as $kat)
                                    @if($kat->id == $buku->id_kategori)
                                        <span class="badge badge-warning">{{$kat->kategori}}</span>
                                    @endif
                                @endforeach

                                <div class="featured-title-box">
                                    <h6>{{$buku->nama_buku}}</h6>

                                    <ul>
                                        <li><p>Pengarang :</p> <p>{{$buku->pengarang}}</p></li>
                                        <li><p>Penerbit :</p> <p>{{$buku->penerbit}}</p></li>
                                        <li><p>Tahun Terbit :</p> <p>{{$buku->tahun}}</p></li>
                                    </ul>
                                    <div class="bottom-icons row">
                                        <a href="{{route('pinjam', $buku->id)}}" class="btn btn-primary col-md-4 float-right">PINJAM</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--//END FEATURED PLACES -->
@endsection
