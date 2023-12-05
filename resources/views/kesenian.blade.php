@extends('main')
@section('title', 'Kesenian')

@section('breadcrumbs')
<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Kesenian</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 mt-2">
            <div class="page-header float-right">
            <div class="page-title">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalSeni">Tambah Data</button>
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
                <strong class="card-title">Data Kesenian Bojonegoro</strong>
            </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                <th>Gambar Kesenian</th>
                <th>Nama Kesenian</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td><img src="{{ asset($item->gambar_kesenian) }}" alt="Gambar Kesenian"></td>
                        <td>{{ $item->nm_kesenian }}</td>
                        <td>{{ $item->deskripsi }}</td>
    
                        <td>
                            <div class="btn-group">
                                <!-- Tombol Edit -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#kesenianModalEdit" onclick="passKesenian('{{$item->id}}','{{$item->gambar_kesenian}}','{{$item->nm_kesenian}}','{{$item->deskripsi}}')">
                                    <i class="fa fa-pencil"></i> Edit
                                </button>                                
                                <!-- Tanda pemisah | -->
                                <span class="divider"> | </span>
                                <!-- Tombol Delete -->
                                <form action="{{ url('kesenian/hapus/'.$item->id) }}" method="POST" style="display:inline;">
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
    function passKesenian(id,gambar,nama,deskripsi){
        console.log(gambar);
        document.getElementById('Kgambar').src = `{{asset('${gambar}')}}`;
        document.getElementById('Knama').value = nama;
        document.getElementById('Kdeskripsi').value = deskripsi;

        const form = document.getElementById('formKesenian');

        form.action = `/updatekesenian/${id}`;

    }

</script>
@include('modal.addkesenian')
@include('edit.kesenianedit')
@endsection
