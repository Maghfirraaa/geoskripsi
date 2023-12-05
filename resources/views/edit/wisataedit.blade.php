<!-- Modal Edit kuliner -->
<div class="modal fade" id="WisataModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Kuliner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <!-- Formulir Edit Data -->
      <form id="formWisata" action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="form-group">
            <label>Gambar Wisata</label>
            <input type="file" name="gambar_wisata" class="form-control" placeholder="">
            <img id="gambarW" src="" alt="Gambar Wisata">
          </div>
          <div class="form-group">
            <label>Nama Wisata</label>
            <input id="namaW" type="text" name="nm_wisata" class="form-control" value="" >
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input id="alamatW" type="text" name="alamat_wisata" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Latitude</label>
            <input id="latitudeW" type="text" name="latitude" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Longitude</label>
            <input id="longitudeW" type="text" name="longitude" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input id="deskripsiW" type="text" name="deskripsi" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Fasilitas</label>
            <input id="fasilitasW" type="text" name="fasilitas" class="form-control" value="">
          </div>
          <div class="form-group">
            <label for="jam_operasional">Jam Operasional</label>
            <select id="jamW" name="jam_operasional" class="form-control">
              <option value="Setiap hari (08.00-16.00)">Setiap hari (08.00-16.00)</option>
              <option value="Setiap hari (08.00-12.00, 13.00-16.00)">Setiap hari (08.00-12.00, 13.00-16.00)</option>
              <option value="Setiap hari (24 jam)">Setiap hari (24 jam)</option>
          </select>          
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input id="teleponW" type="text" name="telepon" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Harga Tiket</label>
            <input id="hargaW" type="text" name="hrg_tiket" class="form-control" value="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>