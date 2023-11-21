<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>index.php/Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a></div>
            </div>
            <div class="col-md-12">
            <?=$this->session->flashdata('message');?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Prodi</th>
                            <th>Ruangan</th>
                            <th>Jurusan</th>
                            <th>Akreditasi</th>
                            <th>Nama Kaprodi</th>
                            <th>tahun Berdiri</th>
                            <th>Output Lulusan</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($prodi as $us) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <th><?= $us['nama']; ?></th>
                                <th><?= $us['ruangan']; ?></th>
                                <th><?= $us['jurusan']; ?></th>
                                <th><?= $us['akreditasi']; ?></th>
                                <th><?= $us['nama_kaprodi']; ?></th>
                                <th><?= $us['tahun_berdiri']; ?></th>
                                <th><?= $us['output_lulusan']; ?></th>
                                <td><img src="<?= base_url('assets/img/prodi/'), $us['gambar']; ?>"
                                style="width: 100px;" class="img-thumbnail"></td>
                                <td>
                                    <a href="<?= base_url('index.php/Prodi/hapus/') . $us['id']; ?>" class=" badge badge-danger" style="background-color: red;">Hapus</a>
                                    <a href="<?= base_url('index.php/Prodi/edit/') . $us['id']; ?>" class=" badge badge-warning" style="background-color: green;">Edit</a>
                                    <a href="<?= base_url('index.php/Prodi/detail/') . $us['id']; ?>" class=" badge badge-info" style="background-color: blue;">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </main>