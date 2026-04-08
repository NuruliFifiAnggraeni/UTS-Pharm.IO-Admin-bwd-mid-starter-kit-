<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-success mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">PHARM.IO Admin</span>
            <a href="/auth/logout" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </nav>

    <div class="container">
        <h3>Selamat Datang, <?= $username ?>!</h3>
        <p>Manajemen stok obat dan alat kesehatan.</p>
        
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Tambah Produk Baru</h5>
                <div class="row g-3">
                    <div class="col-md-4"><input type="text" id="namaObat" class="form-control" placeholder="Nama Obat"></div>
                    <div class="col-md-3"><input type="number" id="stokObat" class="form-control" placeholder="Stok"></div>
                    <div class="col-md-3"><input type="number" id="hargaObat" class="form-control" placeholder="Harga (Rp)"></div>
                    <div class="col-md-2"><button onclick="tambahObat()" class="btn btn-success w-100">Simpan</button></div>
                </div>
            </div>
        </div>

        <table class="table table-hover bg-white shadow-sm rounded">
            <thead class="table-dark">
                <tr>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="productTable">
                </tbody>
        </table>
    </div>

    <script>
        // Logika CRUD Sederhana dengan LocalStorage (Sesuai Permintaan Soal)
        let products = JSON.parse(localStorage.getItem('pharmio_products')) || <?= json_encode($products) ?>;

        function renderTable() {
            const table = document.getElementById('productTable');
            table.innerHTML = '';
            products.forEach((p, index) => {
                table.innerHTML += `
                    <tr>
                        <td>${p.nama}</td>
                        <td>${p.stok}</td>
                        <td>Rp ${p.harga}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editObat(${index})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="hapusObat(${index})">Hapus</button>
                        </td>
                    </tr>`;
            });
            localStorage.setItem('pharmio_products', JSON.stringify(products));
        }

        function tambahObat() {
            const nama = document.getElementById('namaObat').value;
            const stok = document.getElementById('stokObat').value;
            const harga = document.getElementById('hargaObat').value;
            if(nama && stok && harga) {
                products.push({nama, stok, harga});
                renderTable();
            }
        }

        function hapusObat(index) {
            products.splice(index, 1);
            renderTable();
        }

        renderTable();
    </script>
</body>
</html>