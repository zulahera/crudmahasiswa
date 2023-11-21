<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Form Edit Ukm Mahasiswa</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type ="hidden" name ="id" value="<?= $ukm['id']; ?>">
                        <div class="form-group">
                            <label for="nama_ukm">Nama UKM</label>
                            <input type="text" name="nama_ukm" value="<?= $ukm['nama_ukm']; ?>" class="form-control" id="nama_ukm" placeholder="Nama UKM">
                            <?= form_error('nama_ukm', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bidang">Bidang</label>
                            <input type="text" name="bidang" value="<?= $ukm['bidang']; ?>" class="form-control" id="bidang" placeholder="bidang">
                            <?= form_error('bidang', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_anggota">jumlah_anggota</label>
                            <input type="text" name="jumlah_anggota" value="<?= $ukm['jumlah_anggota']; ?>" class="form-control" id="jumlah_anggota" placeholder="jumlah_anggota">
                            <?= form_error('jumlah_anggota', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_pembina">Nama Pembina</label>
                            <input type="text" name="nama_pembina" value="<?= $ukm['nama_pembina']; ?>" class="form-control" id="nama_pembina" placeholder="Nama Pembina">
                            <?= form_error('nama_pembina', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_ketua">Nama Ketua</label>
                            <input type="text" name="nama_ketua" value="<?= $ukm['nama_ketua']; ?>" class="form-control" id="nama_ketua" placeholder="Tahun Berdiri">
                            <?= form_error('nama_ketua', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('index.php/Ukm') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Ukm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
