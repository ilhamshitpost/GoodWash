<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricelist</title>
    <link rel="stylesheet" href="Pricelist.css">
</head>
<body>
    <div class="container">
        <h1>Pricelist Admin</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama treatment</th>
                    <th>Harga</th>
                    <th>Editor</th>
                </tr>
            </thead>
            <tbody id="price-list">
                <tr>
                    <td>Fast Cleaning</td>
                    <td id="price-fast-cleaning">20K</td>
                    <td><button class="edit-button" onclick="openEditModal('Fast Cleaning', '20K')">Edit Harga</button></td>
                </tr>
                <tr>
                    <td>Deep Cleaning</td>
                    <td id="price-deep-cleaning">25K</td>
                    <td><button class="edit-button" onclick="openEditModal('Deep Cleaning', '25K')">Edit Harga</button></td>
                </tr>
                <tr>
                    <td>Heavy Cleaning</td>
                    <td id="price-heavy-cleaning">35K</td>
                    <td><button class="edit-button" onclick="openEditModal('Heavy Cleaning', '35K')">Edit Harga</button></td>
                </tr>
            </tbody>
        </table>
        <button class="add-button" onclick="openAddModal()">Add New Pricelist</button>
        <a href="admin.html">Back</a>
    </div>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Edit Harga</h2>
            <form id="editForm" onsubmit="return savePrice()">
                <input type="hidden" name="nama_treatment" id="editNamaTreatment">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" id="editHarga">
                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <div id="addModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Add New Pricelist</h2>
            <form id="addForm" onsubmit="return addNewPrice()">
                <label for="nama_treatment">Nama Treatment:</label>
                <input type="text" name="nama_treatment" id="addNamaTreatment">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" id="addHarga">
                <button type="submit">Add</button>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(namaTreatment, harga) {
            document.getElementById('editNamaTreatment').value = namaTreatment;
            document.getElementById('editHarga').value = harga;
            document.getElementById('editModal').style.display = 'block';
        }

        function openAddModal() {
            document.getElementById('addModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
            document.getElementById('addModal').style.display = 'none';
        }

        function savePrice() {
            var form = document.getElementById('editForm');
            var namaTreatment = form["nama_treatment"].value;
            var harga = form["harga"].value;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "save_price.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var elementId = "price-" + namaTreatment.toLowerCase().replace(' ', '-');
                    document.getElementById(elementId).textContent = harga;
                    closeModal();
                }
            };

            xhr.send("nama_treatment=" + encodeURIComponent(namaTreatment) + "&harga=" + encodeURIComponent(harga));
            return false;
        }

        function addNewPrice() {
            var form = document.getElementById('addForm');
            var namaTreatment = form["nama_treatment"].value;
            var harga = form["harga"].value;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "add_price.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${namaTreatment}</td>
                        <td id="price-${namaTreatment.toLowerCase().replace(' ', '-')}">${harga}</td>
                        <td><button class="edit-button" onclick="openEditModal('${namaTreatment}', '${harga}')">Edit Harga</button></td>
                    `;
                    document.getElementById('price-list').appendChild(newRow);
                    closeModal();
                }
            };

            xhr.send("nama_treatment=" + encodeURIComponent(namaTreatment) + "&harga=" + encodeURIComponent(harga));
            return false;
        }
    </script>
</body>
</html>
