<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS | Rosa</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: burlywood; background-size: cover;">
    <div class="title">
        <h1>Form Beli Produk</h1>
    </div>
    <div class="container">
        <div class="left-content"></div>
        <div class="right-content">
            <div class="form-box">
                <form method="POST" action="{{ route('store') }}">
                    {{ csrf_field() }}
                    <div class="mb-3 row">
                        <label for="kode_barang" class="col-sm-3 col-form-label">Kode Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukkan kode barang">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <select class="form-select" aria-label="Default select example" id="nama_barang"
                                name="nama_barang">
                                <option selected>Pilih nama barang</option>
                                <option value="Nike 1 (Color: Red)">Nike 1 (Color: Red)</option>
                                <option value="Nike 2 (Color: Pea green)">Nike 2 (Color: Pea green)</option>
                                <option value="Nike 3 (Color: Army)">Nike 3 (Color: Army)</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_varian" class="col-sm-3 col-form-label">Jenis Varian</label>
                        <div class="col-sm-9">
                            <select class="form-select" aria-label="Default select example" id="jenis_varian"
                                name="jenis_varian">
                                <option selected>Pilih ukuran sepatu</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="qty" class="col-sm-3 col-form-label">Qty (Kuantitas)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="qty" name="qty"
                                placeholder="Masukkan jumlah barang yang ingin dibeli">
                        </div>
                    </div>


                    <!-- ambil data nama barang dan jenis ukuran
                        ....
                    -->


                    <div class="mb-3 row">
                        <label for="harga_jual" class="col-sm-3 col-form-label">Harga Jual (1 pcs)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga_jual" name="harga_jual"
                                placeholder="Masukkan harga barang">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="proses">
                        <button type="submit" class="btn btn-warning">Beli</button>
                        <a type="submit" class="btn btn-outline-warning" href="{{ route('show') }}">Lihat Pembelian</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
