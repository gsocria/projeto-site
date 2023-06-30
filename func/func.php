<?php
include_once './config/conexao.php';
function listarTodosRegistros($campos,$tabela) {
    $conn = conectar();
    try{

            $listar = $conn->prepare("SELECT $campos FROM $tabela");
            $listar->execute();
            if($listar->rowCount() > 0) {
                return $listar->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        
    }catch(PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());

    }
}

function contatLinhas($nomeAS,$tabela,$coluna){
    $conn = conectar();
try {

    $listar = $conn->prepare("SELECT COUNT($coluna) AS $nomeAS FROM $tabela;");
    $listar->execute();
    if ($listar->rowCount() > 0) {
        return $listar->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }

} catch (PDOException $e) {
    echo 'Exception:';
    return ($e->getMessage());

}

}
function listarTodosRegDifUm($campos,$tabela,$idcampo, $parametrocampo, $ativo) {
    $conn = conectar();

    try{

            $listar = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ? AND $idcampo <> ?");
            $listar->bindValue(1,$ativo,PDO::PARAM_STR);
            $listar->bindValue(2,$parametrocampo,PDO::PARAM_STR);
            $listar->execute();
            if($listar->rowCount() > 0) {
                return $listar->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        
    }catch(PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());

    }
}
function listarGeral($campos,$tabela) {
    $conn = conectar();

    try{
            $listar = $conn->prepare("SELECT $campos FROM $tabela ");
            $listar->execute();
            if($listar->rowCount() > 0) {
                return $listar->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        
    }catch(PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());

    }

}

function listarAvaliacao(){
    $conn = conectar();

    try{

        $listar = $conn->prepare('SELECT p.profissao, a.nome, a.textoAvaliacao, a.estrela, a.img 
        FROM avaliacao a
        INNER JOIN profissao p ON p.idprofissao = a.idprofissao');

        $listar->execute();
        if($listar->rowCount() > 0) {
            return $listar->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }

    }catch(PDOException $e) {
        echo 'Exception:';
        return ($e->getMessage());
    }
} 

}

