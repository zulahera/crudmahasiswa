<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Detail UKM
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $ukm['nama_ukm']; ?></h2>
                    <h6 class="card-subtitle mb-4 text-muted"><?= $ukm['nama_ukm']; ?></h6>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">bidang</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $ukm['bidang']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">jumlah_anggota</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $ukm['jumlah_anggota']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">nama_pembina</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $ukm['nama_pembina']; ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">nama ketua</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $ukm['nama_ketua']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('index.php/Ukm') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
