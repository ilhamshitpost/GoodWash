document.addEventListener("DOMContentLoaded", function() {
    // Mengambil data pricelist saat halaman dimuat
    fetchPrices();
});

function fetchPrices() {
    fetch('get_prices.php')
    .then(response => response.json())
    .then(data => {
        // Memperbarui tabel dengan data pricelist dari server
        displayPrices(data);
    })
    .catch(error => {
        console.error('Error fetching prices:', error);
    });
}

function displayPrices(prices) {
    var priceListTable = document.getElementById('price-list');

    // Menghapus semua baris yang ada di tabel
    while (priceListTable.firstChild) {
        priceListTable.removeChild(priceListTable.firstChild);
    }

    // Menambahkan baris baru untuk setiap data pricelist
    prices.forEach(function(price) {
        var newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${price.nama_treatment}</td>
            <td id="price-${price.nama_treatment.toLowerCase().replace(' ', '-')}">${price.harga}</td>
            <td><button class="edit-button" onclick="openEditModal('${price.nama_treatment}', '${price.harga}')">Edit Harga</button></td>
        `;
        priceListTable.appendChild(newRow);
    });
}
