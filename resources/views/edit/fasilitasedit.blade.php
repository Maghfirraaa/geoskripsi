<!-- Modal Edit kuliner -->
<div class="modal fade" id="FasilitasModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Fasilitas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Formulir Edit Data -->
        <form id="formFasilitas" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">              
              <div class="form-group">
                <label>Nama Fasilitas</label>
                <input id='Fnama' type="text" name="nm_fasilitas" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id='Fkategori' name="kategori" class="form-control">
                  <option value="Hotel">Hotel</option>
                  <option value="Tempat Makan">Tempat Makan</option>
                  <option value="Tour and Travel">Tour and Travel</option>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input id='Falamat' type="text" name="alamat" class="form-control" value="">
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <input id='Ftelepon' type="text" name="telepon" class="form-control" value="">
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