<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Form Tambah Data Mahasiswa</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= set_value('nama')?>"  class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama','<small class=text-danger p1-3>', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
                            <?= form_error('nim','<small class=text-danger p1-3>', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" value ="<?=set_value('jenis_kelamin')?>" id="jenis_kelamin" class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin','<small class=text-danger p1-3>', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                            <?= form_error('email','<small class=text-danger p1-3>', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name = "prodi" id="prodi" class="form-control">
                                    <option value="">Pilih Prodi</option>
                                    <?php foreach($prodi as $p) : ?>
                                        <option value="<?= $p['id']; ?>"><?= $p['nama'];?></option>
                                        <?php endforeach; ?>
                            </select>
                            <?= form_error('prodi','<small class=text-danger p1-3>', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                            <?= form_error('asal_sekolah','<small class=text-danger p1-3>', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No HP">
                            <?= form_error('no_hp','<small class=text-danger p1-3>', '</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat','<small class=text-danger p1-3>', '</small>');?>
                        </div>
                        <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
