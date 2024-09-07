<?php 
  declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="ms-5">
    <h2 class="mt-2">Resposta do exercício 7</h2>
    <?php
        function diferenca(DateTime $data1, DateTime $data2) : DateInterval {
          return $data1->diff($data2);
        }
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
              $data1 = new DateTime($_POST['valor1']);
              $data2 = new DateTime($_POST['valor2']);
              $diferenca = diferenca($data1, $data2);
              $dias = $diferenca->days;
              echo "$dias dias de diferença.";
            } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>