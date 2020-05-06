<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            width: 500px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        h1{
            margin-bottom: 20px;
        }
    </style>

    <title>Formulir</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <form action="proses.php" method="POST">
        <div class="form-group">
            <label for="formNama">Nama Lengkap</label>
            <input type="text" class="form-control" name="Name" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="formNIM">Nomer Induk Mahasiswa</label>
            <input type="text" class="form-control" placeholder="Masukkan NIM" name="NIM">
        </div>
        <div class="form-group">
            <label for="formTL">Tanggal Lahir</label>
            <input type="date" class="form-control" name="TL">
        </div>
        <div class="form-group">
            <label for="formTempatLahir">Tempat Lahir</label>
            <input type="text" class="form-control" name="TempatLahir" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="form-group">
            <label for="formUmur">Umur</label>
            <input type="text" class="form-control" name="Umur" placeholder="Masukkan Umur">
        </div>
        <div class="form-group">
            <label for="formHobby">Hobby</label>
            <input type="text" class="form-control" name="Hobby" placeholder="Masukkan Hobby">
        </div>
        <div class="form-group">
            <label for="formKeterangan">Keterangan</label>
            <textarea class="form-control" name="Keterangan" placeholder="Masukkan Keterangan" rows="4" cols="50"></textarea>
        </div>
        </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

  </body>
</html>
