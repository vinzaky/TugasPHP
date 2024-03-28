<?php
$a1 = ['nama' => 'Vino', 'nim' => '1352010001', 'nilai' => 91];
$a2 = ['nama' => 'Zaky', 'nim' => '1372010002', 'nilai' => 79];
$a3 = ['nama' => 'Edria', 'nim' => '1432010003', 'nilai' => 88];
$a4 = ['nama' => 'Fandi', 'nim' => '1452010004', 'nilai' => 52];
$a5 = ['nama' => 'Galih', 'nim' => '1352010005', 'nilai' => 83];
$a6 = ['nama' => 'Hani', 'nim' => '1372010006', 'nilai' => 62];
$a7 = ['nama' => 'Jodi', 'nim' => '1432010007', 'nilai' => 72];
$a8 = ['nama' => 'Kiki', 'nim' => '1452010008', 'nilai' => 68];
$a9 = ['nama' => 'Luna', 'nim' => '1352010009', 'nilai' => 89];
$a10 = ['nama' => 'Mira', 'nim' => '1372010010', 'nilai' => 60];
$a11 = ['nama' => 'Nadi', 'nim' => '1432010011', 'nilai' => 65];
$a12 = ['nama' => 'Rudi', 'nim' => '1452010012', 'nilai' => 83];
$a13 = ['nama' => 'Sari', 'nim' => '1352010013', 'nilai' => 79];
$a14 = ['nama' => 'Toni', 'nim' => '1372010014', 'nilai' => 20];
$a15 = ['nama' => 'Wati', 'nim' => '1432010015', 'nilai' => 96];

$ar_mahasiswa = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15];

$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

//fungsi agregat di array
$t_nilai = array_column($ar_mahasiswa, 'nilai');
$j_nilai = array_sum($t_nilai);
$n_tertinggi = max($t_nilai);
$n_terendah = min($t_nilai);
$j_mahasiswa = count($ar_mahasiswa);
$n_rata2 = $j_nilai / $j_mahasiswa;
$n_rata2_edit = number_format($n_rata2, 2);

$keterangan = [

    'Nilai Tertinggi' => $n_tertinggi,
    'Nilai Terendah' => $n_terendah,
    'Rata-Rata Nilai' => $n_rata2_edit,
    'Jumlah Mahasiswa' => $j_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $j_nilai,
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5cba7;

        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }

        tfoot th, tfoot td {
        padding: 20px;
    }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>

    </style>
</head>

<body>
    <h1>Daftar Nilai Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <?php foreach ($ar_judul as $judul) { ?>
                    <th>
                        <?= $judul ?>
                    </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($ar_mahasiswa as $siswa) {
                //Ternary WARNA DAN KETERANGAN
                $warna = $no % 2 == 1 ? 'lightblue' : 'yellow';
                $ket = ($siswa['nilai'] >= 65) ? 'Lulus' : 'Gagal';
                //IF ELSE GRADE
                if ($siswa['nilai'] >= 90 && $siswa['nilai'] <= 100)
                    $grade = 'A';
                elseif ($siswa['nilai'] >= 80 && $siswa['nilai'] <= 90)
                    $grade = 'B';
                elseif ($siswa['nilai'] >= 65 && $siswa['nilai'] <= 80)
                    $grade = 'C';
                elseif ($siswa['nilai'] >= 40 && $siswa['nilai'] <= 65)
                    $grade = 'D';
                elseif ($siswa['nilai'] >= 0 && $siswa['nilai'] <= 40)
                    $grade = 'E';
                else
                    $grade = 'NULL';
                // SWITCHCASE PREDIKAT
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Buruk';
                        break;
                    default:
                        echo "NULL";
                }
                ?>
                <tr bgcolor="<?= $warna; ?>">
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $siswa['nama'] ?>
                    </td>
                    <td>
                        <?= $siswa['nim'] ?>
                    </td>
                    <td>
                        <?= $siswa['nilai'] ?>
                    </td>
                    <td>
                        <?= $ket ?>
                    </td>
                    <td>
                        <?= $grade ?>
                    </td>
                    <td>
                        <?= $predikat ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php foreach ($keterangan as $ktrng => $hasil) {
                ?>
                <tr>
                    <th colspan="3" align="right">
                        <?= $ktrng ?>
                    </th>
                    <th colspan="4" align="left">
                        <?= $hasil ?>
                    </th>
                </tr>

            <?php } ?>
        </tfoot>
    </table>
</body>

</html>