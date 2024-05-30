<script>
    function editTransaction(transactionId) {
        // Mengambil elemen <tr> berdasarkan ID transaksi
        var row = document.querySelector('tbody').querySelector('tr:nth-child(' + transactionId + ')');

        // Mengambil data transaksi dari elemen <tr>
        var tanggal = row.cells[1].innerText;
        var treatment = row.cells[2].innerText;
        var jumlahSepatu = row.cells[3].innerText;
        var total = row.cells[4].innerText;

        // Menampilkan data transaksi dalam prompt untuk pengeditan
        var newTanggal = prompt('Edit Tanggal:', tanggal);
        var newTreatment = prompt('Edit Treatment:', treatment);
        var newJumlahSepatu = prompt('Edit Jumlah Sepatu:', jumlahSepatu);
        var newTotal = prompt('Edit Total:', total);

        // Memperbarui data transaksi jika pengguna mengonfirmasi perubahan
        if (newTanggal !== null && newTreatment !== null && newJumlahSepatu !== null && newTotal !== null) {
            row.cells[1].innerText = newTanggal;
            row.cells[2].innerText = newTreatment;
            row.cells[3].innerText = newJumlahSepatu;
            row.cells[4].innerText = newTotal;
        }
    }
</script>
