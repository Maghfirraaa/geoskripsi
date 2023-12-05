@extends('main')

@section('title', 'Fasilitas')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="row">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Fasilitas</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 mt-2">
            <div class="page-header float-right">
            <div class="page-title">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalFasil">Tambah Data</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="content mt-3">
<div class="animated fadeIn">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Fasilitas Bojonegoro</strong>
            </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                <th>Nama</th>
                <th>Kategori Fasilitas</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->nm_fasilitas }}</td>
                    <td>{{ $item->kategori}}</td>
                    <td>{{ $item->alamat}}</td>
                    <td>{{ $item->telepon}}</td>

                    <td>
                        <div class="btn-group">
                            <!-- Tombol Edit -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#FasilitasModalEdit" onclick="passFasilitas('{{$item->id}}','{{$item->nm_fasilitas}}','{{$item->kategori}}','{{$item->alamat}}','{{$item->telepon}}')">
                                <i class="fa fa-pencil"></i> Edit
                            </button>                                
                            <!-- Tanda pemisah | -->
                            <span class="divider"> | </span>
                            <!-- Tombol Delete -->
                            <form action="{{ url('fasilitas/hapus/'.$item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button>
                            </form>
                            {{-- <a href="{{url('wisata/hapus')}}/{{$item->id}}" class="btn btn-danger"> <i class="fa fa-trash"></i>Hapus</a> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</div><!-- .animated -->
</div>
</div>
<script>
    function passFasilitas(id,nama,kategori,alamat,telepon){
        document.getElementById('Fnama').value = nama;
        document.getElementById('Fkategori').value = kategori;
        document.getElementById('Falamat').value = alamat;
        document.getElementById('Ftelepon').value = telepon;

        const form = document.getElementById('formFasilitas');

        form.action = `/updatefasilitas/${id}`;

    }

</script>
@include('modal.addfasil')
@include('edit.fasilitasedit')
@endsection