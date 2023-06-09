<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3" style="width: 35rem;">
                    <div class="card-body">
                        <form action="/login/check" method="post">
                            <?= csrf_field() ?>
                            User: <input class="ms-5 mt-3" type="text" name="usr" /> <br>
                            Password: <input class="ms-3 mt-3" type="password" name="pwd" /> <br>
                            <input class="mt-3" name="submit" type="submit" value="Login" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>