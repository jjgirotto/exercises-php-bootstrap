<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="mt-2">Resposta do exercício 15</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $peso = (float) $_POST['peso'] ?? 0;
                $altura = (float) $_POST['altura'] ?? 0;
                $imc = $peso / ($altura ** 2);
                echo "<p>IMC: " . number_format($imc, 2) . "</p>";
            } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>