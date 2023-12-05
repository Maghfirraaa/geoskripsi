
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Wisata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form action="{{ route('wisata.create') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="modal-body">
  <div class="form-group">
    <label>Gambar Wisata</label>
    <input type="file" name="gambar_wisata" class="form-control"  placeholder="" required>
    @error('gambar_wisata')
    <div class="text-danger">{{ $message }}</div>
@enderror
     </div>
  <div class="form-group">
    <label>Nama Wisata</label>
    <input type="text" name="nm_wisata" class="form-control"  placeholder="Masukkan Nama Wisata" required>
    @error('nm_wisata')
        <div class="text-danger">{{ $message }}</div>
    @enderror
   </div>
   <div class="form-group">
    <label for="kategori">Kategori</label>
    <select name="kategori" class="form-control" required>
        <option value="" selected disabled>Pilih Kategori Wisata</option>
        <option value="Wisata Alam">Wisata Alam</option>
        <option value="Wisata Air">Wisata Air</option>
        <option value="Wisata Buatan">Wisata Buatan</option>
        <option value="Wisata Agro">Wisata Agro</option>
        <option value="Wisata Edukasi">Wisata Edukasi</option>
        <option value="Wisata Religi">Wisata Religi</option>
        <option value="Wisata Kerajinan">Wisata Kerajinan</option>
        <option value="Wisata Sejarah">Wisata Sejarah</option>
        <option value="Wisata Kuliner">Wisata Kuliner</option>
        <option value="Wisata Budaya">Wisata Budaya</option>
        <option value="Wisata Geopark">Wisata Geopark</option>
        <!-- Tambahkan opsi sesuai kebutuhan -->
    </select>
    @error('kategori')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat_wisata" class="form-control"  placeholder="Masukkan Alamat Wisata" required>
    @error('alamat_wisata')
        <div class="text-danger">{{ $message }}</div>
    @enderror
   </div>
  <div class="form-group">
    <label>Latitude</label>
    <input type="text" name="latitude" class="form-control"  placeholder="Masukkan Latitude Longitude Wisata" required>
    @error('latitude')
       <div class="text-danger">{{ $message }}</div>
    @enderror 
  </div>
   <div class="form-group">
    <label>Longitude</label>
    <input type="text" name="longitude" class="form-control"  placeholder="Masukkan Latitude Longitude Wisata" required>
    @error('longitude')
        <div class="text-danger">{{ $message }}</div>
    @enderror 
  </div>
   <div class="form-group">
    <label>Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control"  placeholder="Masukkan Latitude Longitude Wisata" required>
    @error('deskripsi')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label>Fasilitas</label>
    <input type="text" name="fasilitas" class="form-control"  placeholder="Masukkan Fasilitas Wisata" required>
    @error('fasilitas')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
   <div class="form-group">
    <label for="jam_operasional">Jam Operasional</label>
    <select name="jam_operasional" class="form-control" required>
        <option value="Setiap hari (08.00-16.00)">Setiap hari (08.00-16.00)</option>
        <option value="Setiap hari (08.00-12.00, 13.00-16.00)"> Setiap hari (08.00-12.00, 13.00-16.00)</option>
        <option value="Setiap hari (24 jam)">Setiap hari (24 jam)</option>
        <!-- Tambahkan opsi sesuai kebutuhan -->
    </select>
    @error('jam_operasional')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
  <div class="form-group">
    <label>Telepon</label>
    <input type="text" name="telepon" class="form-control"  placeholder="Masukkan Nomor Telpon" required>
    @error('telepon')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label>Harga Tiket</label>
    <input type="text" name="hrg_tiket" class="form-control"  placeholder="Masukkan Harga Tiket" required>
    @error('hrg_tiket')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Simpan Data</button>
</div>
</form>
    </div>
  </div>
</div>

