@extends('main')

@section('title', 'Wisata')

@section('breadcrumbs')
<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Wisata</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 mt-2">
            <div class="page-header float-right">
                <div class="page-title">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                </div>
                <!-- @can('wisata-create')
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalCreate" style="color: white;"></a>
                <span style="color: white"></span>{{ __('Tambah Data')}}
                @endcan -->
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
                <strong class="card-title">Data Wisata Bojonegoro</strong>
            </div>
        <div class="card-body" style="height: 850px; overflow-y: auto; ">
            
            <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive">
            <thead>
                <tr>
                <th>Gambar Wisata</th>
                <th>Nama Wisata</th>
                <th>Kategori</th>
                <th>Alamat</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Deskripsi</th>
                <th>Fasilitas</th>
                <th>Jam Operasional</th>
                <th>Telepon</th>
                <th>Harga Tiket</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td><img src="{{asset($item->gambar_wisata)}}" alt="Gambar Wisata"></td>
                        
                        <td>{{ $item->nm_wisata }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->alamat_wisata }}</td>
                        <td>{{ $item->latitude }}</td>
                        <td>{{ $item->longitude }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->fasilitas }}</td>
                        <td>{{ $item->jam_operasional }}</td>
                        <td>{{ $item->telepon }}</td>
                        <td>{{ $item->hrg_tiket }}</td>
                        <td>
                            <div class="btn-group">
                                <!-- Tombol Edit -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#WisataModalEdit" onclick="UpdateWisata('{{$item->id}}','{{$item->gambar_wisata}}','{{$item->nm_wisata}}','{{$item->alamat_wisata}}','{{$item->latitude}}','{{$item->longitude}}','{{$item->deskripsi}}','{{$item->fasilitas}}','{{$item->jam_operasional}}','{{$item->telepon}}','{{$item->hrg_tiket}}')">
                                    <i class="fa fa-pencil"></i> Edit
                                </button>                                
                                <!-- Tanda pemisah | -->
                                <span class="divider"> | </span>
                                <!-- Tombol Delete -->
                                <form action="{{ url('wisata/hapus/'.$item->id) }}" method="POST" style="display:inline;">
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
    function UpdateWisata(id,gambar,nama,alamat,latitude,longitude,deskripsi,fasilitas,jam,telepon,harga){
        console.log(gambar);
        document.getElementById('gambarW').src = `{{asset('${gambar}')}}`;
        document.getElementById('namaW').value = nama;
        document.getElementById('alamatW').value = alamat;
        document.getElementById('latitudeW').value = latitude;
        document.getElementById('longitudeW').value = longitude;
        document.getElementById('deskripsiW').value = deskripsi;
        document.getElementById('fasilitasW').value = fasilitas;
        document.getElementById('jamW').value = jam;
        document.getElementById('teleponW').value = telepon;
        document.getElementById('hargaW').value = harga;

        const form = document.getElementById('formWisata');

        form.action = `/updatewisata/${id}`;

    }
</script>
@include('modal.addwisata')
@include('edit.wisataedit')
@endsection


