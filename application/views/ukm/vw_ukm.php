<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>index.php/UKM/tambah" class="btn btn-info mb-2">Tambah UKM</a></div>
            </div>
            <div class="col-md-12">
            <?=$this->session->flashdata('message');?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama UKM</th>
                            <th>Bidang</th>
                            <th>Jumlah Anggota</th>
                            <th>Nama Pembina</th>
                            <th>Nama Ketua</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($ukm as $us) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <th><?= $us['nama_ukm']; ?></th>
                                <th><?= $us['bidang']; ?></th>
                                <th><?= $us['jumlah_anggota']; ?></th>
                                <th><?= $us['nama_pembina']; ?></th>
                                <th><?= $us['nama_ketua']; ?></th>
                                <td>
                                    <a href="<?= base_url('index.php/Ukm/hapus/') . $us['id']; ?>" class=" badge badge-danger" style="background-color: red;">Hapus</a>
                                    <a href="<?= base_url('index.php/Ukm/edit/') . $us['id']; ?>" class=" badge badge-warning" style="background-color: green;">Edit</a>
                                    <a href="<?= base_url('index.php/Ukm/detail/') . $us['id']; ?>" class=" badge badge-info" style="background-color: blue;">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </main>