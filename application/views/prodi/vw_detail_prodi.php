<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Detail Prodi
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $prodi['nama']; ?></h2>
                    <h6 class="card-subtitle mb-4 text-muted"><?= $prodi['nama_']; ?></h6>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Ruangan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['ruangan']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Jurusan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['jurusan']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Akreditasi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['akreditasi']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Nama Kaprodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['nama_kaprodi']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Tahun Berdiri</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['tahun_berdiri']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Output</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['output_lulusan']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('index.php/Prodi') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
