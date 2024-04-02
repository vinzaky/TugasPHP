<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1060px;
            margin: auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
            flex: 1;
        }

        input[type="text"],
        select {
            flex: 2;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: auto;
            padding: 10px 20px;
            text-align: center;
            border: none;
            background-color: #BDB76B;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            align-self: center;
            margin-top: 10px;
        }

        button:hover {
            background-color: #006400;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            margin-bottom: 10px;
        }

        th {
            background-color: #BDB76B;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e9e9e9;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Form Nilai Mahasiswa</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" placeholder="Masukkan NIM">
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
            </div>

            <div class="form-group">
                <label for="kuliah">Kuliah</label>
                <select id="kuliah" name="kuliah">
                    <option value="">-- Pilih Universitas --</option>
                    <option value="Universitas Pakuan">Universitas Pakuan</option>
                    <option value="Universitas Pancasila">Universitas Pancasila</option>
                    <option value="Universitas Gunadarma">Universitas Gunadarma</option>
                    <option value="Universitas Negeri Jakarta">Universitas Negeri Jakarta</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mata_kuliah">Mata Kuliah</label>
                <select id="mata_kuliah" name="mata_kuliah">
                    <option value="">-- Pilih Matkul --</option>
                    <option value="UIUX">UIUX</option>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="PHP">PHP</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nilai">Nilai</label>
                <input type="text" name="nilai" id="nilai" placeholder="Masukkan Nilai">
            </div>

            <button name="proses" type="submit">Simpan</button>
        </form>

        <?php
        // sertakan file classnya
        require_once 'Mahasiswa.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // tangkap data dari form
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $kuliah = $_POST['kuliah'];
            $mata_kuliah = $_POST['mata_kuliah'];
            $nilai = $_POST['nilai'];

            // objek
            $ns1 = new Mahasiswa($nim, $nama, $kuliah, $mata_kuliah, $nilai);
            ?>

            <!-- cetak hasil dengan tabel -->
            <h2 align="center">Daftar Nilai Mahasiswa</h2>
            <table>
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kuliah</th>
                        <th>Mata Kuliah</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Predikat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $ns1->nim ?>
                        </td>
                        <td>
                            <?= $ns1->nama ?>
                        </td>
                        <td>
                            <?= $ns1->kuliah ?>
                        </td>
                        <td>
                            <?= $ns1->mata_kuliah ?>
                        </td>
                        <td>
                            <?= $ns1->nilai ?>
                        </td>
                        <td>
                            <?= $ns1->getGrade() ?>
                        </td>
                        <td>
                            <?= $ns1->getPredikat() ?>
                        </td>
                        <td>
                            <?= $ns1->getStatus() ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
    </div>
</body>

</html>
