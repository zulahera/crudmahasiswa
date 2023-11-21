<?php
include "connection.php"; // Menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama_lengkap = $_POST["nama_lengkap"];
    $nama_panggilan = $_POST["nama_panggilan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $kebutuhan_khusus = isset($_POST["kebutuhan_khusus"]) ? 1 : 0;
    
    // Mengambil nama file surat keterangan
    $surat_keterangan = $_FILES["surat_keterangan"]["name"];
    $surat_keterangan_tmp = $_FILES["surat_keterangan"]["tmp_name"];
    
    $yatim_piatu = isset($_POST["yatim_piatu"]) ? 1 : 0;
    $nik = $_POST["nik"];
    $pekerjaan_ayah = $_POST["pekerjaan_ayah"];
    $pekerjaan_ibu = $_POST["pekerjaan_ibu"];
    $penghasilan_ayah = $_POST["penghasilan_ayah"];
    
    // Upload file surat keterangan
    $surat_keterangan_destination = "uploads/" . $surat_keterangan;
    move_uploaded_file($surat_keterangan_tmp, $surat_keterangan_destination);
    
    // Insert data ke dalam database
    $sql = "INSERT INTO siswa (nama_lengkap, nama_panggilan, jenis_kelamin, kebutuhan_khusus, surat_keterangan, yatim_piatu, nik, pekerjaan_ayah, pekerjaan_ibu, penghasilan_ayah) VALUES ('$nama_lengkap', '$nama_panggilan', '$jenis_kelamin', '$kebutuhan_khusus', '$surat_keterangan', '$yatim_piatu', '$nik', '$pekerjaan_ayah', '$pekerjaan_ibu', '$penghasilan_ayah')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran sukses!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close(); // Menutup koneksi database
}
?>
