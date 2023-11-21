
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Form Tambah Prodi Capres</div>
                <div class="card-body">
                    <form action="<?=base_url('index.php/Capres/upload')?>" method="POST">
                        <div class="form-group">
                            <label for="nama">NIK</label>
                            <input type="text" name="NIK" class="form-control" id="NIK" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="ruangan">NamaLengkap</label>
                            <input type="text" name="NamaLengkap" class="form-control" id="NamaLengkap" placeholder="NamaLengkap">
                        </div>

                        <div class="form-group">
                            <label for="akreditasi">Asal</label>
                            <input type="text" name="Asal" class="form-control" id="Asal " placeholder="Asal ">
                        </div>
                        <div class="form-group">
                            <label for="nama_kaprodi">PartaiPendukung' </label>
                            <input type="text" name="PartaiPendukung" class="form-control" id="PartaiPendukung' " placeholder="Akreditasi">
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">RiwayatPekerjaan </label>
                            <input type="text" name="RiwayatPekerjaan" class="form-control" id="RiwayatPekerjaan " placeholder="RiwayatPekerjaan  Berdiri">
                        </div>
                      
                        <div class="form-group">
                            <label for="output_lulusan">Umur</label>
                            <input type="text" name="Umur" class="form-control" id="Umur" placeholder="Umur">
                        </div>
                        <a href="<?= base_url('index.php/Capres') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Capres</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
