<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data D-Lemas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        td {
            color: #555;
        }
        hr {
            border: none;
            border-top: 1px solid #ddd;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        center {
            margin-top: 50px;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <table>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
            <?php foreach ($dtsiswa as $siswa): ?>
            <tr>
                <td><?= $siswa['nama']; ?></td>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['kelas']; ?></td>
                <td><?= $siswa['tgllahir']; ?></td>
                <td><?= $siswa['tempatlahir']; ?></td>
                <td><?= $siswa['alamat']; ?></td>
                <td><?= $siswa['jeniskelamin']; ?></td>
                <td><?= $siswa['agama']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="<?= base_url('dlemas'); ?>">Input Data Lagi??</a>
    </center>
</body>
</html>
