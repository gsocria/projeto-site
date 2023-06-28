<?php
include_once '../config/conexao.php';
function listarTodosRegistros($campos,$tabela,$ativo) {
    $conn = conectar();
    try{

            $listar = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ? ");
            $listar->bindValue(1,$ativo,PDO::PARAM_STR);
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
function inserirnalista($nometabela,$camposTabela,$valores){
   $conn = conectar();
   $lista = $conn->prepare("INSERT INTO $nometabela($camposTabela) VALUES ($valores)");
   $lista -> execute();
   if($lista->rowCount() > 0){
      return 'Cadastrado';
    
   }else{
      return 'Vazio';
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
function inserirnalista($nometabela,$camposTabela,$valores){
   $conn = conectar();
   $lista = $conn->prepare("INSERT INTO $nometabela($camposTabela) VALUES ($valores)");
   $lista -> execute();
   if($lista->rowCount() > 0){
      return 'Cadastrado';
    
   }else{
      return 'Vazio';
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
