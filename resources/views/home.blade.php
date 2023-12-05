@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="{{ url('/home') }}"> <i class="menu-icon fa fa-dashboard"></i></a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-map-marker"></i>
                    <ul>
                        <li>
                            <strong><span class="count"></span></strong>
                            <span>Destinasi Wisata</span> 
                        </li>
                        <strong><span class="count"></span>{{$jumlah_wisata}}</strong>
                    </ul>
                </div>
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-cutlery"></i>
                    <ul>
                        <li>
                            <strong><span class="count"></span></strong>
                            <span>Kuliner Khas</span>
                        </li>
                            <strong><span class="count"></span>{{$jumlah_kuliner}}</strong>
                    </ul>
                </div>
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-paint-brush"></i>
                    <ul>
                        <li>
                            <strong><span class="count"></span></strong>
                            <span>Kesenian</span>
                        </li>
                        <strong><span class="count"></span>{{$jumlah_kesenian}}</strong>
                    </ul>
                </div>
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-industry"></i>
                    <ul>
                        <li>
                            <strong><span class="count"></span></strong>
                            <span>Kerajinan</span>
                        </li> 
                        <strong><span class="count"></span>{{$jumlah_kerajinan}}</strong>
                    </ul>
                </div>
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-building"></i>
                    <ul>
                        <li>
                            <strong><span class="count"></span></strong>
                            <span>Fasilitas</span>
                        </li>
                        <strong><span class="count"></span>{{$jumlah_fasilitas}}</strong>
                    </ul>
                </div>
            </div><!--/.col-->
        </div>
        {{-- <hr style="border: 1px solid rgb(109, 106, 106);"> --}}
    </div><!-- .animated -->
</div><!-- .content -->
@endsection
