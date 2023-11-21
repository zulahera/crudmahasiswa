 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid">
             <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
             <div class="row">
                 <div class="col-md-6"><a href="<?= base_url() ?>index.php/Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
             </div>
             <div class="col-md-12">
                <?= $this->session->flashdata('message');?>
                 <table class="table">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama</th>
                             <th>Nim</th>
                             <th>Email</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $i = 1 ?>
                         <?php foreach ($mahasiswa as $us) : ?>
                             <tr>
                                 <td><?= $i; ?></td>
                                 <td><?= $us['nama']; ?></td>
                                 <td><?= $us['nim']; ?></td>
                                 <td><?= $us['email']; ?></td>
                                 <td>
                                 <a href="<?= base_url('index.php/Mahasiswa/hapus/') . $us['id']; ?>" class=" badge badge-danger" style="background-color: red;">Hapus</a>
                                 <a href="<?= base_url('index.php/Mahasiswa/edit/') . $us['id']; ?>" class=" badge badge-warning" style="background-color: green;">Edit</a>
                                 <a href="<?= base_url('index.php/Mahasiswa/detail/') . $us['id']; ?>" class=" badge badge-info" style="background-color: blue;">Detail</a>
                                 </td>
                             </tr>
                             <?php $i++; ?>
                         <?php endforeach; ?>

                     </tbody>
                 </table>
             </div>
         </div>

     </main>