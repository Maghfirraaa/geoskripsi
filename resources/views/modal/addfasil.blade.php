<!-- Modal untuk menambah data -->
<div class="modal fade" id="ModalFasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulir untuk menambah data -->
                <form action="{{ route('fasilitas.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nm_fasilitas">Nama Fasilitas</label>
                        <input type="text" class="form-control" id="wnama" name="nm_fasilitas" placeholder="Masukkan Nama Fasilitas" required>
                        @error('nm_fasilitas')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="" selected disabled>Pilih Kategori</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Tempat Makan">Tempat Makan</option>
                            <option value="Tour and Travel">Tour and Travel</option>
                            <!-- Tambahkan opsi sesuai kebutuhan -->
                        </select>
                        @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="wnama" name="alamat" placeholder="Masukkan Alamat" required>
                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telepon">No. Telepon</label>
                        <input type="text" class="form-control" id="wtelpon" name="telepon" placeholder="Masukkan No. Telepon" required>
                        @error('telepon')
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
