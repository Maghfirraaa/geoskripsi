<!-- Modal Edit kuliner -->
<div class="modal fade" id="KulinerModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Kuliner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Formulir Edit Data -->
        <form id="formKuliner" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <div class="form-group">
                <label>Gambar kuliner</label>
                <input type="file" name="gambar_kuliner" class="form-control" placeholder="">
                <img id="gambarShow" src="" alt="Gambar kuliner">
            
              </div>
              <div class="form-group">
                <label>Nama kuliner</label>
                <input id="namaForm" type="text" name="nm_kuliner" class="form-control" value="">
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <input id="deskripsiForm" type="text" name="deskripsi" class="form-control" value="">
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