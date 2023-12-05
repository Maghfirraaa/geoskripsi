@extends('main')

@section('title', 'Kerajinan')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="row">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Kerajinan</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 mt-2">
            <div class="page-header float-right">
            <div class="page-title">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalKerajinan">Tambah Data</button>
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
                <strong class="card-title">Data Kerajinan Bojonegoro</strong>
            </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                <th>Gambar Kerajinan</th>
                <th>Nama Kerajinan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td><img src="{{ $item->gambar_kerajinan }}" alt="Gambar Kerajinan"></td>
                    <td>{{ $item->nm_kerajinan }}</td>
                    <td>{{ $item->deskripsi }}</td>

                    <td>
                        <div class="btn-group">
                            <!-- Tombol Edit -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#KerajinanModalEdit" onclick="passKerajinan('{{$item->id}}','{{$item->gambar_kerajinan}}','{{$item->nm_kerajinan}}','{{$item->deskripsi}}')">
                                <i class="fa fa-pencil"></i> Edit
                            </button>                                
                            <!-- Tanda pemisah | -->
                            <span class="divider"> | </span>
                            <!-- Tombol Delete -->
                            <form action="{{ url('kerajinan/hapus/'.$item->id) }}" method="POST" style="display:inline;">
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
    function passKerajinan(id,gambar,nama,deskripsi){
        console.log(gambar);
        document.getElementById('Rgambar').src = `{{asset('${gambar}')}}`;
        document.getElementById('Rnama').value = nama;
        document.getElementById('Rdeskripsi').value = deskripsi;

        const form = document.getElementById('formKerajinan');

        form.action = `/updatekerajinan/${id}`;

    }

</script>
@include('modal.addkerajinan')
@include('edit.kerajinanedit')
@endsection
