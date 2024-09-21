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
            <div class="col-3">
                <label for="codigos" class="form-label">Digite os códigos: </label>
                <?php for ($i=1; $i <= 5; $i++): ?>
                  <input type="text" class="form-control mb-2" name="codigos[]" id="codigos" placeholder="Código <?= $i ?>">
                <?php endfor; ?>
            </div>
            <div class="col-3">
                <label for="nomes" class="form-label">Digite os nomes: </label>
                <?php for ($i=1; $i <= 5; $i++): ?>
                  <input type="text" class="form-control mb-2" name="nomes[]" id="nomes" placeholder="Nome <?= $i ?>">
                <?php endfor; ?>
            </div>
            <div class="col-3">
                <label for="precos" class="form-label">Digite os preços: </label>
                <?php for ($i=1; $i <= 5; $i++): ?>
                  <input type="number" class="form-control mb-2" name="precos[]" id="precos" placeholder="Preço <?= $i ?>">
                <?php endfor; ?>
            </div>
        </div>
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
          $codigos = $_POST['codigos'];
          $precos = $_POST['precos'];
          for ($i=0; $i < 5; $i++) {
            $valores[$nomes[$i]] = $precos[$i];  
            $produtos[$codigos[$i]] = [
              'nome' => $nomes[$i],
              'preco' => $precos[$i]
            ];
          }
          for ($i=0; $i < 5; $i++) {
            if ($precos[$i] > 100) {
              $precos[$i] *= 0.9;
              echo "<p>$precos[$i]</p>";
            }
          }
          ksort($valores);
          echo "<p>Resposta: </p>";
          foreach ($produtos as $chave => $valor) {
            foreach($valores as $key => $value)
              echo "<p>$chave - $key - $value</p>";
          }
        } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
        }
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>