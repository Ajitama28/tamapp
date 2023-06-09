<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hapus Data Asisten</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Hapus Asisten Praktikum</h1>
                <form action="/asisten/delete" method="post">
                    <?= csrf_field() ?>
                    <p>
                        <label for="name">NIM</label>
                        <input type="text" name="nim" />
                    </p>
                    <input type="submit" value="Delete" />
                </form>
            </div>
            <div class="mt-3">
                <a href="/AsistenController/tampil" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>