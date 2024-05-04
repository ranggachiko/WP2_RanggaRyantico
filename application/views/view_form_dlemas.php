<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa D-Lemas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        form {
            margin-top: 20px;
        }
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #fff;
        }
        #form{
            text-align: center;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 50%; 
            padding: 15px;
            background-color: #008DDA;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin: 0 auto; 
            display: block; 
        }
        input[type="submit"]:hover {
            background-color: #008D;
        }
    </style>
</head>
<body>
    <center>
    <form action="<?= base_url('dlemas/cetak'); ?>"method="post">
    <table>
        <tr>
            <th  id='form' colspan= '3'>
                Form Input Data Siswa D-Lemas
            </th>
        </tr>
        <tr>
            <td colspan= '3'>
                <hr>
            </td>
        </tr>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <td>
                <input type="text" name="nama" id="nama">
            </td>
        </tr>
        <tr>
            <th>Nis</th>
            <th>:</th>
            <td>
                <input type="text" name="nis" id="nis">
            </td>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <td>
                <input type="text" name="kelas" id="kelas">
            </td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <td>
                <input type="date" name="tgllahir" id="tgllahir">
            </td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <td>
                <input type="text" name="tempatlahir" id="tempatlahir">
            </td>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <td>
                <input type="text" name="alamat" id="alamat">
            </td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <td>
                <input type="radio" name="jeniskelamin" id="kelaminlaki" value="Laki-Laki">
                <label for="kelaminlaki">Laki-Laki</label>
                <input type="radio" name="jeniskelamin" id="kelaminpr" value="Perempuan">
                <label for="kelaminpr">Perempuan</label> 
            </td>
        </tr>
        <tr>
            <th>Agama</th>
            <td>:</td>
            <td>
                <select name="agama" id="agama">
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
       </form>
    </center>
</body>
</html>