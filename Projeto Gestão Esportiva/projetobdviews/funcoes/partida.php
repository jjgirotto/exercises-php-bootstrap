<?php
    declare(strict_types=1);
    require_once '../config/bancodedados.php';

    function buscarPartidas(): array {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM partida");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function buscarPartidaPorId(int $id): ?array {
        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM partida WHERE id_partida = ?");
        $statement->execute([$id]);
        $partida = $statement->fetch(PDO::FETCH_ASSOC);
        return $partida ? $partida : null;
    }

    function criarPartida(int $idCompeticao, string $resultado): bool {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO partida (id_competicao, resultado) VALUES (?, ?)");
        return $stmt->execute([$idCompeticao, $resultado]);
    }

    function criarEquipeDaPartida(int $idEquipe, int $idPartida, int $pontuacao): bool {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO equipe_da_partida (id_equipe, id_partida, pontuacao)
                                VALUES (?, ?, ?)");
        return $stmt->execute([$idEquipe, $idPartida, $pontuacao]);
    }

    function alterarPartida(int $id, int $idCompeticao, string $resultado):bool {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE partida SET id_competicao = ?, resultado = ? WHERE id_partida = ?");
        return $stmt->execute([$idCompeticao, $resultado, $id]);
    }

    function alterarEquipeDapartida(int $idEquipe, int $pontuacao):bool {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE equipe_da_partida SET pontuacao = ? WHERE id_equipe = ?");
        return $stmt->execute([$pontuacao, $idEquipe]);
    }

    function excluirpartida(int $id):bool {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM partida WHERE id_partida = ?");
        return $stmt->execute([$id]);
    }

    function excluirEquipeDapartida(int $id):bool {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM equipe_da_partida WHERE id_equipe= ?");
        return $stmt->execute([$id]);
    }
?>