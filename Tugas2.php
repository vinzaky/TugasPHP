<!DOCTYPE html>
<html>

<head>
    <title>Form Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="reset"] {
            background-color: #dc3545;
        }

        button[type="submit"]:hover,
        button[type="reset"]:hover {
            opacity: 0.8;
        }

        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            color: #721c24;
        }
    </style>
</head>

<body>
    <h2>Form Belanja</h2>
    <div class="container">
        <form method="post">
            <div class="input-group">
                <label>Nama Pelanggan:</label>
                <input type="text" name="nama_pelanggan">
            </div>
            <div class="input-group">
                <label>Produk Pilihan:</label>
                <select name="produk">
                    <option value="">--Pilih Produk--</option>
                    <option value="RAM">RAM</option>
                    <option value="SSD">SSD</option>
                    <option value="Motherboard">Motherboard</option>
                    <option value="Processor">Processor</option>
                </select>
            </div>
            <div class="input-group">
                <label>Jumlah Beli:</label>
                <input type="number" name="jumlah_beli" min="1">
            </div>
            <button type="submit" name="submit">Simpan</button>
            <button type="reset">Batal</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $produk = $_POST['produk'];
        $jumlah_beli = $_POST['jumlah_beli'];


        switch ($produk) {
            case 'RAM':
                $h_satuan = 615000;
                break;
            case 'SSD':
                $h_satuan = 700000;
                break;
            case 'Motherboard':
                $h_satuan = 2000000;
                break;
            case 'Processor':
                $h_satuan = 3400000;
                break;

            default:
                $h_satuan = 0;
                break;
        }

        $t_belanja = $jumlah_beli * $h_satuan;
        $diskon = 0.20 * $t_belanja;
        $ppn = 0.10 * ($t_belanja - $diskon);
        $h_bersih = $t_belanja - $diskon + $ppn;

        echo "<div class='output'>";
        echo "Nama Pelanggan: $nama_pelanggan <br>";
        echo "Produk Pilihan: $produk <br>";
        echo "Jumlah Beli: $jumlah_beli <br>";
        echo "Harga Satuan: $h_satuan <br>";
        echo "Total Belanja: $t_belanja <br>";
        echo "Diskon: $diskon <br>";
        echo "PPN: $ppn <br>";
        echo "Harga Bersih: $h_bersih <br>";
        echo "</div>";
    }
    ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector("form");

            form.addEventListener("submit", function (event) {
                const namaPelanggan = form.elements["nama_pelanggan"].value.trim();
                const produk = form.elements["produk"].value;
                const jumlahBeli = parseInt(form.elements["jumlah_beli"].value, 10);

                if (namaPelanggan === "") {
                    alert("Nama pelanggan harus diisi!");
                    event.preventDefault();
                }

                if (produk === "") {
                    alert("Pilih produk terlebih dahulu!");
                    event.preventDefault();
                }

                if (isNaN(jumlahBeli) || jumlahBeli < 1) {
                    alert("Jumlah beli harus angka dan lebih dari 0!");
                    event.preventDefault();
                }
            });

            const resetButton = document.querySelector("button[type='reset']");
            resetButton.addEventListener("click", function (event) {
                const isConfirmed = confirm("Apakah Anda yakin ingin mereset form?");
                if (!isConfirmed) {
                    event.preventDefault();
                }
            });
        });
    </script>
</body>

</html>
