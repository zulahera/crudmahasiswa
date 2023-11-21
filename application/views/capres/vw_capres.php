

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>index.php/Capres/tambah" class="btn btn-info mb-2">Tambah Capres</a></div>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK </th>
                            <th>Nama Lengkap</th>
                            <th>Asal</th>
                            <th>Partai Pendukung</th>
                            <th>Riwayat Pekerjaan</th>
                            <th>Umur</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($prodi as $us) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <th><?= $us['NIK']; ?></th>
                                <th><?= $us['NamaLengkap']; ?></th>
                                <th><?= $us['Asal']; ?></th>
                                <th><?= $us['PartaiPendukung']; ?></th>
                                <th><?= $us['RiwayatPekerjaan']; ?></th>
                                <th><?= $us['Umur']; ?></th>
                                <td>
                                    <a href="<?= base_url('index.php/Capres/hapus/') . $us['id']; ?>" class=" badge badge-danger" style="background-color: red;">Hapus</a>
                                    <a href="<?= base_url('index.php/Capres/edit/') . $us['id']; ?>" class=" badge badge-warning" style="background-color: green;">Edit</a>
                                    <a href="<?= base_url('index.php/Capres/detail/') . $us['id']; ?>" class=" badge badge-info" style="background-color: blue;">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </main>