document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const inputKode = document.getElementById("kode");
    const inputJumlah = document.getElementById("jumlah");

    // 1. Validasi Formulir saat Submit
    form.addEventListener("submit", function (event) {
        // Pola regex untuk Kode Barang: harus diawali "BRG-" diikuti angka
        const polaKode = /^BRG-\d+$/;

        if (!polaKode.test(inputKode.value)) {
            alert("Kesalahan: Kode Barang wajib diawali dengan prefiks 'BRG-' diikuti angka (Contoh: BRG-001).");
            event.preventDefault(); // Mencegah form terkirim
            return;
        }

        if (inputJumlah.value <= 0) {
            alert("Kesalahan: Jumlah Barang harus berupa nilai numerik positif (> 0).");
            event.preventDefault();
            return;
        }

        // Fitur Interaksi DOM: Notifikasi Sukses (Toast/Alert Konfirmasi)
        alert("Berhasil! Formulir valid dan data barang siap diproses.");
    });

    // 2. Fitur Interaksi DOM Dinamis: Pencarian/Filter Real-Time pada Tabel
    const sectionTabel = document.querySelector("#tabel-barang");
    
    // Membuat elemen input pencarian secara dinamis di atas tabel
    const containerCari = document.createElement("div");
    containerCari.style.marginBottom = "15px";
    containerCari.innerHTML = `
        <label for="cariBarang" style="font-weight: bold; display: block; margin-bottom: 5px;">Cari Inventaris:</label>
        <input type="text" id="cariBarang" placeholder="Ketik nama atau kode barang..." style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    `;
    sectionTabel.insertBefore(containerCari, sectionTabel.querySelector("table"));

    const inputCari = document.getElementById("cariBarang");
    const barisTabel = document.querySelectorAll("#tabel-barang tbody tr");

    inputCari.addEventListener("keyup", function () {
        const keyword = inputCari.value.toLowerCase();

        barisTabel.forEach(function (baris) {
            const teksBaris = baris.textContent.toLowerCase();
            if (teksBaris.includes(keyword)) {
                baris.style.display = ""; // Tampilkan jika cocok
            } else {
                baris.style.display = "none"; // Sembunyikan jika tidak cocok
            }
        });
    });
});