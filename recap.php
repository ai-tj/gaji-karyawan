<!DOCTYPE html>
<html>

<head>
    <title>Form Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url("https://wallpapercave.com/wp/wp2598952.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            text-align: center;
            color: black;
            padding: 10px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            text-align: left;
        }

        select,
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="reset"] {
            background-color: #ff0000;
            /* Warna merah */
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="reset"]:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>
    <h1>Form Data Karyawan</h1>
    <form action="hasil.php" method="post">
        <table>
            <tr>
                <th>Nama:</th>
                <td><input type="text" name="nama" required /></td>
            </tr>
            <tr>
                <th>NIP:</th>
                <td><input type="text" name="nip" /></td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>
                    <select name="status">
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Jumlah Anak:</th>
                <td><input type="number" name="jumlah_anak" /></td>
            </tr>
            <tr>
                <th>Grade:</th>
                <td>
                    <select name="grade">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />
    </form>
</body>

</html>