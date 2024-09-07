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
    <h2 class="mt-2">Resposta do exercício 4</h2>
    <?php
        function dataValida(int $dia, int $mes, int $ano) : bool {
          return checkdate($mes, $dia, $ano);
        }
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $valor1 = (int) $_POST['valor1'];
                $valor2 = (int) $_POST['valor2'];
                $valor3 = (int) $_POST['valor3'];
                if (dataValida($valor1, $valor2, $valor3))
                  echo "Data válida: $valor1/$valor2/$valor3";
                else
                  echo "Data $valor1/$valor2/$valor3 inválida!";
            } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>