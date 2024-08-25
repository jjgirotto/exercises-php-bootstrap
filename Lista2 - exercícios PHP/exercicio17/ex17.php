<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class="mt-2">Exercício 17</h2>
    <form action="ex17resp.php" method="POST">
        <div class="row mt-3">
            <div class="col">
                <label for="capital" class="form-label">Informe o capital (R$): </label>
                <input type="number" class="form-control" name="capital" id="capital" step="0.01">
            </div>
            <div class="col">
                <label for="juros" class="form-label">Informe a taxa de juros: </label>
                <input type="number" class="form-control" name="juros" id="juros" step="0.1">
            </div>
            <div class="col">
                <label for="periodo" class="form-label">Informe o período em meses: </label>
                <input type="number" class="form-control" name="periodo" id="periodo">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>