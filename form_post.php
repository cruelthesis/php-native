<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="proses.php" method="post">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>

            <tr>
                <td rowspan="3">
                    <button type="submit" class="form">Simpan</button>
                    <button type="reset">Ulang</button>
                </td>
            </tr>
        <table>
    </form>
    
</body>
</html>