<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="Transaksi.css">
</head>
<body>
    <div class="container">
        <h1>Data Transaksi</h1>
        <button onclick="tambahData()">Tambah Data</button> <!-- Tombol Tambah Data -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Treatment</th>
                    <th>Jumlah Sepatu</th>
                    <th>Total</th>
                    <th>Action</th> <!-- Kolom untuk tombol Edit dan Hapus -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2024-03-28</td>
                    <td>Deep Clean</td>
                    <td>3</td>
                    <td>75.000</td>
                    <td>
                        <button class="edit-btn" onclick="editTransaction(1)">Edit</button>
                        <button class="delete-btn" onclick="deleteTransaction(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2024-03-29</td>
                    <td>Fast Clean</td>
                    <td>5</td>
                    <td>100.000</td>
                    <td>
                        <button class="edit-btn" onclick="editTransaction(2)">Edit</button>
                        <button class="delete-btn" onclick="deleteTransaction(2)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2024-03-30</td>
                    <td>Fast Clean</td>
                    <td>2</td>
                    <td>40.000</td>
                    <td>
                        <button class="edit-btn" onclick="editTransaction(3)">Edit</button>
                        <button class="delete-btn" onclick="deleteTransaction(3)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function tambahData() {
            // Formulir atau prompt untuk memasukkan data transaksi baru
            var newTanggal = prompt('Masukkan Tanggal:');
            var newTreatment = prompt('Masukkan Treatment:');
            var newJumlahSepatu = prompt('Masukkan Jumlah Sepatu:');
            var newTotal = prompt('Masukkan Total:');

            // Membuat elemen <tr> baru untuk data transaksi baru
            var newRow = document.createElement('tr');
            newRow.innerHTML = '<td></td><td></td><td></td><td></td><td></td><td></td>';

            // Memperbarui nilai dari elemen <td> di elemen <tr> baru
            newRow.cells[0].innerText = document.querySelectorAll('tbody tr').length + 1;
            newRow.cells[1].innerText = newTanggal;
            newRow.cells[2].innerText = newTreatment;
            newRow.cells[3].innerText = newJumlahSepatu;
            newRow.cells[4].innerText = newTotal;

            // Menentukan isi tombol Action sesuai dengan aksi yang diambil
            var action = '<button class="edit-btn" onclick="editTransaction(' + newRow.cells[0].innerText + ')">Edit</button>' +
                         '<button class="delete-btn" onclick="deleteTransaction(' + newRow.cells[0].innerText + ')">Hapus</button>';

            // Menambahkan isi tombol Action ke elemen <td> di elemen <tr> baru
            newRow.cells[5].innerHTML = action;

            // Menambahkan elemen <tr> baru ke tabel
            document.querySelector('tbody').appendChild(newRow);
        }

        function editTransaction(transactionId) {
            // Di sini Anda bisa menambahkan logika untuk menangani pengeditan transaksi
            alert('Edit transaksi dengan ID: ' + transactionId);
        }

        function deleteTransaction(transactionId) {
            // Di sini Anda bisa menambahkan logika untuk menghapus transaksi
            alert('Hapus transaksi dengan ID: ' + transactionId);
        }
    </script>
</body>
</html>
