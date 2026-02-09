<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3 class="mb-3">Data Produk</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produks as $produk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>
                    <img src="{{ asset('storage/' . $produk->gambar) }}" width="80">
                </td>
                <td>{{ $produk->deskripsi }}</td>
                <td>Rp {{ number_format($produk->harga) }}</td>
                <td>{{ $produk->stok }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center text-muted">
                    Data produk tidak tersedia
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>
</div>

</body>
</html>
