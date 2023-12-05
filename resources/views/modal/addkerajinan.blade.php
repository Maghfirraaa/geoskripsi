<!-- Modal untuk menambah data -->
<div class="modal fade" id="ModalKerajinan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Kerajinan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulir untuk menambah data -->
                <form action="{{ route('kerajinan.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gambar_kerajinan">Gambar Kerajinan</label>
                        <input type="file" class="form-control" id="gambar_kerajinan" name="gambar_kerajinan" required>
                        @error('gambar_kerajinan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nm_kerajinan">Nama Kerajinan</label>
                        <input type="text" class="form-control" id="nm_kerajinan" name="nm_kerajinan" placeholder="Masukkan Nama Kerajinan" required>
                        @error('nm_kerajinan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Kerajinan</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Kerajinan" required>
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
