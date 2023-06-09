<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pendaftaran Asisten</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3" style="width: 35rem;">
                    <div class="card-body">
                        <h1>Pendaftaran Asisten Praktikum</h1>
                        <form action="/asisten/simpan" method="post">
                            <?= csrf_field() ?>
                            <label for="NIM" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                            <label for="Praktikum" class="form-label">PRAKTIKUM</label>
                            <input type="text" class="form-control" name="praktikum">
                            <label for="IPK" class="form-label">IPK</label>
                            <input type="text" class="form-control" name="ipk">
                            <div class="mt-3">
                                <input type="submit" name="" value="Simpan">
                            </div>
                        </form>
                        <div class="mt-3">
                            <a href="/AsistenController/tampil" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>