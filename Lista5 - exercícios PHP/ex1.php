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
                <label for="nomes" class="form-label">Digite os nomes: </label>
                <?php for ($i=1; $i <= 5; $i++): ?>
                  <input type="text" class="form-control mb-2" name="nomes[]" id="nomes" placeholder="Nome <?= $i ?>">
                <?php endfor; ?>
            </div>
            <div class="col-3">
                <label for="telefones" class="form-label">Digite os telefones: </label>
                <?php for ($i=1; $i <= 5; $i++): ?>
                  <input type="text" class="form-control mb-2" name="telefones[]" id="telefones" placeholder="Telefone <?= $i ?>">
                <?php endfor; ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
    
    <?php 
      if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        try {
          $nomes = $_POST['nomes'];
          $telefones = $_POST['telefones'];
          for ($i=0; $i < 5; $i++) { 
            
          }
        } catch (Exception $e) {
                echo "Erro! ".$e->getMessage();
        }
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>