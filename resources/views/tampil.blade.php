<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: burlywood; background-size: cover;">
    <div class="title">
        <h1>Tabel Pembelian Produk</h1>
        <a type="button" class="btn btn-light" href="{{ route('create') }}">Tambah +</a>
    </div>

    <div class="content-tampil">
        <div class="tampil">
            <div class=tampilBox>
                <table class="table table-warning">
                    <tbody>
                        <tr>
                            <th>Kode Barang</th>
                            <td class="table-light">{{ $barang->kode_barang }}</td>
                        </tr>
                        <tr>
                            <th>Nama Barang</th>
                            <td class="table-light">{{ $barang->nama_barang }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Varian</th>
                            <td class="table-light">{{ $barang->jenis_varian }}</td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td class="table-light">{{ $barang->qty }}</td>
                        </tr>
                        <tr>
                            <th>Harga Jual</th>
                            <td class="table-light">Rp {{ $barang->harga_jual }}</td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td class="table-light">Rp {{ $total_harga }}</td>
                        </tr>
                        <tr>
                            <th>Potongan Harga</th>
                            <td class="table-light">Rp {{ $potongan_harga }}</td>
                        </tr>
                        <tr>
                            <th>Total Bayar</th>
                            <td class="table-light">Rp {{ $total_bayar }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>