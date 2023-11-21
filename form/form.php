<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Form Pendaftaran Siswa Baru</h1>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" required><br>

        <label for="nama_panggilan">Nama Panggilan:</label>
        <input type="text" name="nama_panggilan" id="nama_panggilan" required><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki" required>
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" required>
        <label for="perempuan">Perempuan</label><br>

        <label for="kebutuhan_khusus">Anak Berkebutuhan Khusus?</label>
        <input type="checkbox" name="kebutuhan_khusus" id="kebutuhan_khusus"><br>

        <label for="surat_keterangan">Surat Keterangan Berkebutuhan Khusus (PDF/PNG/JPG/PNG):</label>
        <input type="file" name="surat_keterangan" id="surat_keterangan"><br>

        <label for="yatim_piatu">Anak Yatim/Piatu?</label>
        <input type="checkbox" name="yatim_piatu" id="yatim_piatu"><br>

        <label for="nik">NIK:</label>
        <input type="text" name="nik" id="nik" required><br>

        <label>Pekerjaan Ayah:</label>
        <input type="radio" name="pekerjaan_ayah" value="Buruh" id="buruh" required>
        <label for="buruh">Buruh</label>
        <input type="radio" name="pekerjaan_ayah" value="Petani" id="petani" required>
        <label for="petani">Petani</label>
        <input type="radio" name="pekerjaan_ayah" value="Wiraswasta" id="wiraswasta" required>
        <label for="wiraswasta">Wiraswasta</label><br>

        <label>Pekerjaan Ibu:</label>
        <input type="radio" name="pekerjaan_ibu" value="IRT" id="irt" required>
        <label for="irt">IRT</label>
        <input type="radio" name="pekerjaan_ibu" value="Guru" id="guru" required>
        <label for="guru">Guru</label>
        <input type="radio" name="pekerjaan_ibu" value="Dokter" id="dokter" required>
        <label for="dokter">Dokter</label><br>

        <label for="penghasilan_ayah">Penghasilan Ayah:</label>
        <input type="text" name="penghasilan_ayah" id="penghasilan_ayah" required><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
