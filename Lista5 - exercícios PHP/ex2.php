<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mapas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h2 class="mt-2">Mapas</h2>
    <form action="" method="POST">
      <div class="row mt-3">
        <div class="col">
            <p>Digite os nomes:</p>
        </div>
        <div class="col">
            <p>Digite as notas da P1:</p>
        </div>
        <div class="col">
            <p>Digite as notas da P2:</p>
        </div>
        <div class="col">
            <p>Digite as notas da P3:</p>
        </div>
      </div>
      <?php for ($i=1; $i <= 5; $i++): ?>
        <div class="row mt-2">
            <div class="col">
                  <input type="text" class="form-control mb-2" name="nomes[]" id="nomes" step="0.01" placeholder="Nome <?= $i ?>">
            </div>
            <div class="col">
                  <input type="text" class="form-control mb-2" name="notas1[]" id="notas1" step="0.01">
            </div>
            <div class="col">
                  <input type="text" class="form-control mb-2" name="notas2[]" id="notas2" step="0.01" placeholder="Nota <?= $i ?>">
            </div>
            <div class="col">
                  <input type="text" class="form-control mb-2" name="notas3[]" id="notas3" step="0.01" placeholder="Nota <?= $i ?>">
            </div>
        </div>
      <?php endfor; ?>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary mb-3">Enviar</button>
            </div>
        </div>
    </form>
    
    <?php 
      if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        try {
          $nomes = $_POST['nomes'];
          $notas1 = $_POST['notas1'];
          $notas2 = $_POST['notas2'];
          $notas3 = $_POST['notas3'];
          for ($i=0; $i < 5; $i++) {
            $media = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;
            $medias[$nomes[$i]] = $media;
          }
          arsort($medias);
          echo "<p>Resposta: </p>";
          foreach ($medias as $chave => $valor) {
            echo "<p>$chave - " . number_format($valor, 2);
          }
        } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
        }
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>