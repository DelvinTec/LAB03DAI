<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card mt-5">
                <div class="card-header">
                    <div class="card-title">Suma y multiplicación</div>
                </div>
                <div class="card-body">
                    <form action="D2.php" method="post">
                        <div class="form-group">
                            <label>Nota 1</label>
                            <input type="number" name="nota1" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Nota 2</label>
                            <input type="number" name="nota2" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Nota 3</label>
                            <input type="number" name="nota3" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>