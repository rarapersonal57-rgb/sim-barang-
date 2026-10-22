<?php
// Mencegah akses langsung tanpa mengirim formulir
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.html");
    exit();
}

// 1. Tangkap data dari form menggunakan $_POST
$kode     = htmlspecialchars($_POST['kode'] ?? '');
$nama     = htmlspecialchars($_POST['nama'] ?? '');
$kategori = htmlspecialchars($_POST['kategori'] ?? '');
$jumlah   = (int)($_POST['jumlah'] ?? 0);
$harga    = (float)($_POST['harga'] ?? 0);
$kondisi  = htmlspecialchars($_POST['kondisi'] ?? '');

// 2. Perhitungan Statis: Total Estimasi Nilai Aset (Jumlah x Harga Satuan)
$total_nilai_aset = $jumlah * $harga;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Pemrosesan Barang - SIM-Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>SIM-Barang - Hasil Pemrosesan Sisi Server (PHP)</h1>
    </header>

    <main>
        <section>
            <h2>Ringkasan Data Barang Terinput</h2>
            <p>Data berikut telah berhasil diterima dan diproses oleh server melalui metode <strong>HTTP POST</strong>:</p>
            <br>

            <!-- Tabel Ringkasan Pemrosesan -->
            <table>
                <tr>
                    <th>Kode Barang</th>
                    <td><?= $kode; ?></td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td><?= $kategori; ?></td>
                </tr>
                <tr>
                    <th>Jumlah Barang</th>
                    <td><?= $jumlah; ?> unit</td>
                </tr>
                <tr>
                    <th>Harga Satuan</th>
                    <td>Rp <?= number_format($harga, 0, ',', '.'); ?></td>
                </tr>
                <tr>
                    <th>Total Estimasi Nilai Aset</th>
                    <td><strong>Rp <?= number_format($total_nilai_aset, 0, ',', '.'); ?></strong></td>
                </tr>
                <tr>
                    <th>Kondisi</th>
                    <td><?= $kondisi; ?></td>
                </tr>
            </table>

            <br>
            <a href="index.html" style="display: inline-block; padding: 10px 15px; background-color: #2c3e50; color: white; text-decoration: none; border-radius: 4px;">&larr; Kembali ke Formulir Utama</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 SIM-Barang. D3 Manajemen Informatika - Politeknik Negeri Sriwijaya.</p>
    </footer>

</body>
</html>