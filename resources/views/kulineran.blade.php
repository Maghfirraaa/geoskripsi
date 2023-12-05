@extends('main')

@section('title', 'Kuliner')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="row">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Kuliner</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 mt-2">
            <div class="page-header float-right">
            <div class="page-title">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalKuliner">Tambah Data</button>
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
                <strong class="card-title">Data Kuliner Bojonegoro</strong>
            </div>
        <div class="card-body" style="height: 850px;  overflow-y: auto; ">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                <th>Gambar Kuliner</th>
                <th>Nama Kuliner</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td><img src="{{asset($item->gambar_kuliner)}}" alt="Gambar Kuliner"></td>
                        <td>{{ $item->nm_kuliner }}</td>
                        <td>{{ $item->deskripsi }}</td>
    
                        <td>
                            <div class="btn-group">
                                <!-- Tombol Edit -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#KulinerModalEdit" onclick="passData('{{$item->id}}','{{$item->gambar_kuliner}}','{{$item->nm_kuliner}}','{{$item->deskripsi}}')">
                                    <i class="fa fa-pencil"></i> Edit
                                </button>                                
                                <!-- Tanda pemisah | -->
                                <span class="divider"> | </span>
                                <!-- Tombol Delete -->
                                <form action="{{ url('kuliner/hapus/'.$item->id) }}" method="POST" style="display:inline;">
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

<script>
    function passData(id,gambar,nama,deskripsi){
        console.log(gambar);
        document.getElementById('gambarShow').src = `{{asset('${gambar}')}}`;
        document.getElementById('namaForm').value = nama;
        document.getElementById('deskripsiForm').value = deskripsi;

        const form = document.getElementById('formKuliner');

        form.action = `/updatekuliner/${id}`;

    }

</script>
@include('modal.addkuliner')
@include('edit.kulineredit')
{{-- @include('edit.editkuliner.blade.php') --}}

@endsection


