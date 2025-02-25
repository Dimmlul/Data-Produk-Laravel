<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Edit Produk</h2>

        <!-- Form Edit Produk -->
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="name" class="form-control" placeholder="Nama Produk"
                        value="{{ $product->name }}" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="description" class="form-control" placeholder="Deskripsi"
                        value="{{ $product->description }}" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="price" class="form-control" placeholder="Harga"
                        value="{{ $product->price }}" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="stock" class="form-control" placeholder="Stok"
                        value="{{ $product->stock }}" required>
                </div>
                <div class="col-md-2 ">
                    <button type="submit" class="btn btn-dark">Update Produk</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
