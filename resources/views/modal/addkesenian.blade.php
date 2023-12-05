<!-- Modal untuk menambah data -->
<div class="modal fade" id="ModalSeni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Kesenian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulir untuk menambah data -->
                <form action="{{ route('kesenian.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kgambar">Gambar Kesenian</label>
                        <input type="file" class="form-control" id="wgambar" name="gambar_kesenian" required>
                        @error('gambar_kesenian')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="knama">Nama Kesenian</label>
                        <input type="text" class="form-control" id="wnama" name="nm_kesenian" placeholder="Masukkan Nama Kesenian" required>
                        @error('nm_kesenian')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kdeskripsi">Deskripsi Kesenian</label>
                        <input type="text" class="form-control" id="wnama" name="deskripsi" placeholder="Masukkan Deskripsi Kesenian" required>
                        @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Tambahkan formulir lainnya sesuai kebutuhan -->
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
