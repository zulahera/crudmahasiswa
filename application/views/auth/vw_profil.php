<div class="container-fluid">
    <div class="page-heading">
        <h1 class="h4 mb-4 text-gray-see"><?= $judul; ?></h1>
    </div>
    <div class="text-center mb-4"> <!-- Tambahkan class "text-center" dan "mb-4" (margin-bottom) -->
        <h2>Halaman Profile</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['nama']; ?></h5>
                            <p class="card-text"><?= $user['email']; ?></p>
                            <p class="card-text">
                                <small class="text-muted">Anggota sejak <?= date('d F Y', 
                                strtotime($user['date_created'])); ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
