<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM-Barang - Sistem Informasi Manajemen Inventaris</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header & Navigasi -->
    <header>
        <h1>SIM-Barang (Sistem Informasi Manajemen Inventaris)</h1>
        <nav>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tabel-barang">Inventaris</a></li>
                <li><a href="#form-barang">Tambah Barang</a></li>
            </ul>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        
        <!-- Bagian 1: Tabel Inventaris Barang -->
        <section id="tabel-barang">
            <h2>Daftar Inventaris Barang</h2>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BRG-001</td>
                        <td>Proyektor Epson</td>
                        <td>Elektronik</td>
                        <td>5</td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <td>BRG-002</td>
                        <td>Laptop Lenovo ThinkPad</td>
                        <td>Elektronik</td>
                        <td>10</td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <td>BRG-003</td>
                        <td>Meja Kerja Kayu</td>
                        <td>Furnitur</td>
                        <td>15</td>
                        <td>Cukup</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <hr style="margin: 30px 0;">

        <!-- Bagian 2: Formulir Input Barang -->
        <section id="form-barang">
            <h2>Formulir Input Barang Baru</h2>
            <form action="#" method="POST">
                
                <div>
                    <label for="kode">Kode Barang:</label><br>
                    <input type="text" id="kode" name="kode" placeholder="Contoh: BRG-004" required>
                </div>
                <br>

                <div>
                    <label for="nama">Nama Barang:</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama barang" required>
                </div>
                <br>

                <div>
                    <label for="kategori">Kategori:</label><br>
                    <select id="kategori" name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Furnitur">Furnitur</option>
                        <option value="ATK">Alat Tulis Kantor (ATK)</option>
                    </select>
                </div>
                <br>

                <div>
                    <label for="jumlah">Jumlah:</label><br>
                    <input type="number" id="jumlah" name="jumlah" min="1" placeholder="Masukkan jumlah" required>
                </div>
                <br>

                <div>
                    <label for="kondisi">Kondisi:</label><br>
                    <select id="kondisi" name="kondisi" required>
                        <option value="">-- Pilih Kondisi --</option>
                        <option value="Baik">Baik</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                    </select>
                </div>
                <br>

                <button type="submit">Simpan Barang</button>
            </form>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 SIM-Barang. D3 Manajemen Informatika - Politeknik Negeri Sriwijaya.</p>
    </footer>
    
    <!-- Hubungkan JavaScript -->
    <script src="main.js"></script>

</body>
</html>