<!DOCTYPE html>
<html>

<head>
    <title>Hasil Perhitungan Gaji Karyawan</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        h1 {
            background-color: #ddd;
            color: black;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        th,
        td {
            color: #333;
        }
    </style>
</head>

<body>
    <h1>Hasil Perhitungan Gaji Karyawan</h1>
    <?php
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $status = $_POST['status'];
    $jumlah_anak = $_POST['jumlah_anak'];
    $grade = $_POST['grade'];

    $gaji_pokok = 0;
    $tunjangan_istri_suami = 0;
    $tunjangan_anak = 0;
    $tunjangan_jabatan = 0;
    $transport = 0;
    $uang_makan = 0;

    if ($grade == 1) {
        $gaji_pokok = 5000000;
    } elseif ($grade == 2) {
        $gaji_pokok = 3500000;
    } elseif ($grade == 3) {
        $gaji_pokok = 2500000;
    } elseif ($grade == 4) {
        $gaji_pokok = 2000000;
    } elseif ($grade == 5) {
        $gaji_pokok = 1000000;
    }

    if ($status == "Menikah") {
        $tunjangan_istri_suami = $gaji_pokok * 0.3;
    } else {
        $tunjangan_istri_suami = 0;
    }

    $tunjangan_anak = $gaji_pokok / 10 * $jumlah_anak;
    $tunjangan_jabatan = $gaji_pokok * 0.2;
    $transport = $gaji_pokok / 20;
    $uang_makan = $gaji_pokok * 0.03;
    $jumlah_tunjangan = $tunjangan_istri_suami + $tunjangan_anak + $tunjangan_jabatan + $transport + $uang_makan;
    $gaji_kotor = $gaji_pokok + $jumlah_tunjangan;
    $taspen = $gaji_pokok * 0.05;
    $asuransi = $gaji_pokok * 0.02;
    $pajak = $gaji_kotor * 0.15;
    $gaji_bersih = $gaji_kotor - $taspen - $asuransi - $pajak;
    ?>

    <table border="1">
        <tr>
            <th>Nama:</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>NIP:</th>
            <td><?php echo $nip; ?></td>
        </tr>
        <tr>
            <th>Status:</th>
            <td><?php echo $status; ?></td>
        </tr>
        <tr>
            <th>Jumlah Anak:</th>
            <td><?php echo $jumlah_anak; ?></td>
        </tr>
        <tr>
            <th>Grade:</th>
            <td><?php echo $grade; ?></td>
        </tr>
        <tr>
            <th>Gaji Pokok:</th>
            <td>Rp <?php echo number_format($gaji_pokok, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Tunjangan Istri/Suami:</th>
            <td>Rp <?php echo number_format($tunjangan_istri_suami, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Tunjangan Anak:</th>
            <td>Rp <?php echo number_format($tunjangan_anak, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Tunjangan Jabatan:</th>
            <td>Rp <?php echo number_format($tunjangan_jabatan, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Transport:</th>
            <td>Rp <?php echo number_format($transport, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Uang Makan:</th>
            <td>Rp <?php echo number_format($uang_makan, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Jumlah Tunjangan:</th>
            <td>Rp <?php echo number_format($jumlah_tunjangan, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Gaji Kotor:</th>
            <td>Rp <?php echo number_format($gaji_kotor, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Potongan Taspen (5%):</th>
            <td>Rp <?php echo number_format($taspen, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Potongan Asuransi (2%):</th>
            <td>Rp <?php echo number_format($asuransi, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Potongan Pajak (15%):</th>
            <td>Rp <?php echo number_format($pajak, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Gaji Bersih:</th>
            <td>Rp <?php echo number_format($gaji_bersih, 0, ',', '.'); ?></td>
        </tr>
    </table>
</body>

</html>