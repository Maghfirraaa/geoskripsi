<!-- Modal Edit kuliner -->
<div class="modal fade" id="KerajinanModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Kerajinan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Formulir Edit Data -->
        <form id="formKerajinan" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <div class="form-group">
                <label>Gambar kerajinan</label>
                <input type="file" name="gambar_kerajinan" class="form-control" placeholder="">
                <img id="Rgambar" src="" alt="Gambar kerajinan">
              </div>
              <div class="form-group">
                <label>Nama Kerajinan</label>
                <input id="Rnama" type="text" name="nm_kerajinan" class="form-control" value="">
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <input id="Rdeskripsi" type="text" name="deskripsi" class="form-control" value="">
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