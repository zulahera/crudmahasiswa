<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Form Tambah Ukm</div>
                <div class="card-body">
                    <form action="<?= base_url('index.php/Ukm/tambah') ; ?>" method="POST">
                        <div class="form-group">
                            <label for="nama_ukm">Nama UKM</label>
                            <input type="text" name="nama_ukm" class="form-control" value="<?= set_value('nama_ukm'); ?>" id="nama_ukm" placeholder="nama_ukm">
                            <?= form_error('nama_ukm', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bidang">bidang</label>
                            <input type="text" name="bidang" class="form-control" value="<?= set_value('bidang'); ?>" id="bidang" placeholder="bidang">
                            <?= form_error('bidang', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_anggota">jumlah_anggota</label>
                            <input type="text" name="jumlah_anggota" class="form-control" value="<?= set_value('jumlah_anggota'); ?>" id="jumlah_anggota" placeholder="jumlah_anggota">
                            <?= form_error('jumlah_anggota', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_pembina">Nama Pembina</label>
                            <input type="text" name="nama_pembina" class="form-control" value="<?= set_value('nama_pembina'); ?>" id="nama_pembina" placeholder="Nama Pembina">
                            <?= form_error('nama_pembina', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_ketua">Nama Ketua</label>
                            <input type="text" name="nama_ketua" class="form-control" value="<?= set_value('nama_ketua'); ?>" id="nama_ketua" placeholder="Nama Ketua">
                            <?= form_error('nama_ketua', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>