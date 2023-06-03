<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>SMKN 5 BATAM</title>
</head>
<body>
    <header>
        <h1>Tambah Siswa</h1>
    </header>
    <nav>
        <ul>
            <li><a href="daftar_siswa.php">Data Siswa</a></li>
        </ul>
    </nav>
    <fieldset>
        <div class="m-5">
            <form action="proses_tambah.php" method="POST">
                <div class="form-group">
                    <label for="nama">Example textarea</label>
                    <textarea class="form-control" id="nama" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="p1">Example textarea</label>
                    <textarea class="form-control" id="p1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="p2">Example textarea</label>
                    <textarea class="form-control" id="p2" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="p3">Example textarea</label>
                    <textarea class="form-control" id="p3" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="p4">Example textarea</label>
                    <textarea class="form-control" id="p4" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="p5">Example textarea</label>
                    <textarea class="form-control" id="p5" rows="3"></textarea>
                </div>

                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" />
                </p>
                <p>
                    <label for="nis">NIS: </label>
                    <input type="text" name="nis" placeholder="NIS" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea id="text" name="alamat" placeholder="Alamat" style="height:200px"></textarea>
                </p>
                <p>
                    <label for="jk">Jenis Kelamin: </label>
                    <select id="jk" name="jk">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </p>
                <p>
                    <label for="kelas">Kelas: </label>
                    <input type="text" name="kelas" placeholder="x tkj 1" />
                </p>
                <P>
                    <input type="submit" value="daftar" name="tambah">
                </P>
            </form>
        </div>
    </fieldset>
</body>
</html>