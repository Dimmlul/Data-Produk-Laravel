<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Data Produk</h2>

        <!-- Form Tambah Produk -->
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="name" class="form-control" placeholder="Nama Produk" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="description" class="form-control" placeholder="Deskripsi" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="price" class="form-control" placeholder="Harga" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="stock" class="form-control" placeholder="Stok" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-dark">Tambah Produk</button>
                </div>
            </div>
        </form>

        <!-- Tabel Daftar Produk -->
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $index => $product)
                    <tr>
                        <!-- increment produk -->
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <!-- format Rupiah di harga -->
                        <td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <!-- Edit  -->
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-dark btn-sm">Edit</a>
                            <!-- Delete -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
