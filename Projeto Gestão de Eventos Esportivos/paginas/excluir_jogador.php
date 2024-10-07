<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'
?>

<div class="container mt-5">
    <h2>Excluir Jogador</h2>
    
    <p>Tem certeza de que deseja excluir o jogador abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> </li>
        <li><strong>Descrição:</strong> </li>
        <li><strong>Número da camisa:</strong> </li>
        <li><strong>Preço:</strong> </li>
        <li><strong>Estoque Mínimo:</strong> </li>
    </ul>
    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="produtos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
