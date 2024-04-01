<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Produk Toko Beras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<?php
$nama = $_POST["nama"];
$produk = $_POST["produk"];
$alamat = $_POST["alamat"];
$jumlahBeli = $_POST["jumlahBeli"];

if ($produk == "Beras Putih" && $jumlahBeli > 1) {
    $hargaSatuan = 12000;
    $totalBelanja = $jumlahBeli * $hargaSatuan;
} else if ($produk == "Beras Merah" && $jumlahBeli > 0) {
    $hargaSatuan = 15000;
    $totalBelanja = $jumlahBeli * $hargaSatuan;
} else if ($produk == "Beras Hitam" && $jumlahBeli > 0) {
    $hargaSatuan = 20000;
    $totalBelanja = $jumlahBeli * $hargaSatuan;
} else if ($produk == "Beras Organik" && $jumlahBeli > 0) {
    $hargaSatuan = 30000;
    $totalBelanja = $jumlahBeli * $hargaSatuan;
} else {
    $hargaSatuan = 0;
    $totalBelanja = 0;
}

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Form Pemesanan Produk Toko Beras</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Pengiriman</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat lengkap Anda" required>
                </div>
                <div class="mb-3">
                    <label for="produk" class="form-label">Produk Pilihan</label>
                    <select name="produk" id="produk" class="form-select" required>
                        <option value="">Pilih produk...</option>
                        <option value="Beras Putih">Beras Putih (Rp 12.000/kg)</option>
                        <option value="Beras Merah">Beras Merah (Rp 15.000/kg)</option>
                        <option value="Beras Hitam">Beras Hitam (Rp 20.000/kg)</option>
                        <option value="Beras Organik">Beras Organik (Rp 30.000/kg)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jumlahBeli" class="form-label">Jumlah Beli (kg)</label>
                    <input type="number" name="jumlahBeli" id="jumlahBeli" class="form-control" placeholder="Masukkan jumlah beli (dalam kg)" min="1" required>
                </div>
                <button type="submit" name="proses" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
        </div>
        <?php if (isset($_POST["proses"])) { ?>
            <div class="col-md-6">
                <h1 class="mb-4">Hasil Data Pemesanan</h1>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td><?= $nama ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pengiriman</td>
                            <td><?= $alamat ?></td>
                        </tr>
                        <tr>
                            <td>Produk Pilihan</td>
                            <td><?= $produk ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Beli (kg)</td>
                            <td><?= $jumlahBeli ?></td>
                        </tr>
                        <tr>
                            <td>Harga Satuan</td>
                            <td>Rp <?= number_format($hargaSatuan, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <td>Total Belanja</td>
                            <td>Rp <?= number_format($totalBelanja, 0, ',', '.') ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
