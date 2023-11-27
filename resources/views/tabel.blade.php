<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Pembelian</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: burlywood; background-size: cover;">
    <div class="title">
        <h1>Tabel Pembelian Produk</h1>
        <a type="button" class="btn btn-light" href="{{ route('create') }}">Tambah +</a>
    </div>

    <div class="container1">
        <table class="table table-striped-columns table-hover table-warning">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Ukuran</th>
                    <th>Kuantitas</th>
                    <th>Harga Jual (1pcs)</th>
                    <th>Total Harga</th>
                    <th>Diskon</th>
                    <th>Total Pembayaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $produk)
                    <tr>
                        <td>{{ $produk->kode_barang }}</td>
                        <td>{{ $produk->nama_barang }}</td>
                        <td>{{ $produk->jenis_varian }}</td>
                        <td>{{ $produk->qty }}</td>
                        <td>{{ $produk->harga_jual }}</td>
                        <td>{{ $produk->total_harga }}</td>
                        <td>{{ $produk->potongan_harga }}</td>
                        <td>{{ $produk->total_bayar }}</td>
                        <td class="action">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-warning">Edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
