<!-- Modal Edit kuliner -->
<div class="modal fade" id="kesenianModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Kesenian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Formulir Edit Data -->
        <form  id="formKesenian" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <div class="form-group">
                <label>Gambar kesenian</label>
                <input type="file" name="gambar_kesenian" class="form-control" placeholder="">
                <img id="Kgambar" src="" alt="Gambar kesenian">
              </div>
              <div class="form-group">
                <label>Nama Kesenian</label>
                <input id="Knama" type="text" name="nm_kesenian" class="form-control" value="">
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <input id="Kdeskripsi" type="text" name="deskripsi" class="form-control" value="">
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