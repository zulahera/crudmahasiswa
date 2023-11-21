

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Detail Capres
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $capres['NIK']; ?></h2>
                    <h6 class="card-subtitle mb-4 text-muted"><?= $prodi['NIK']; ?></h6>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Nama Lengkap </div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['NamaLengkap ']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Asal </div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['Asal ']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">PartaiPendukung</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['PartaiPendukung']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Riwayat  Pekerjaan </div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['RiwayatPekerjaan ']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Umur</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $prodi['Umur']; ?></div>
                    </div>
                   
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('index.php/Capres') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
