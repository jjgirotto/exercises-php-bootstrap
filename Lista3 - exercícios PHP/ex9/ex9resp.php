<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="ms-5">
    <h2 class="mt-2">Resposta do exercício 9</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $valor = (int) $_POST['valor'] ?? 0;
                $fatorial = 1;
                if ($valor == 0) {
                  $fatorial = $fatorial;
                }
                else {
                  for ($i=1; $i <= $valor; $i++) { 
                    $fatorial *= $i; 
                  }
                }
                echo "Fatorial = $fatorial";
            } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>