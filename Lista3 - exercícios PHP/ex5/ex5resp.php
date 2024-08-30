<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="mt-2">Resposta do exercício 5</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            try {
                $valor = (int) $_POST['valor'] ?? 0;
                switch ($valor) {
                  case '1':
                    $mes = "Janeiro";
                    break;
                  case '2':
                    $mes = "Fevereiro";
                    break;
                  case '3':
                    $mes = "Março";
                    break;
                  case '4':
                    $mes = "Abril";
                    break;
                  case '5':
                    $mes = "Maio";
                    break;
                  case '6':
                    $mes = "Junho";
                    break;
                  case '7':
                    $mes = "Julho";
                    break;
                  case '8':
                    $mes = "Agosto";
                    break;
                  case '9':
                    $mes = "Setembro";
                    break;
                  case '10':
                    $mes = "Outubro";
                    break;
                  case '11':
                    $mes = "Novembro";
                    break;
                  case '12':
                    $mes = "Dezembro";
                    break;
                }
                echo "Mês $valor refere-se ao mês de $mes.";
            } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>