<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Data Produk</h3>
        <a href="/produk/create" class="btn btn-primary">
            + Tambah Data
        </a>
    </div>
     @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    

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
                 <td>{{ "Rp " . number_format($produk->harga,2,',','.') }}</td>
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
