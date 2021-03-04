<?php
require_once('./conexao.php');

function fnAddAluno($nome, $email, $telefone)
{
    $link = getConnection();

    $query = "insert into tbAlunos values(null, '{$nome}', '{$email}', '{$telefone}')";

    if (!mysqli_query($link, $query)) {
        throw new \Exception("Error ao gravar", 1);
        return false;
    }
    return true;
}

function fnListAlnos() {
    $link = getConnection();

    $query = "select * from tbAlunos";

    $rs = mysqli_query($link, $query);

    $alunos = array();
    while($row = mysqli_fetch_assoc($rs)) {
      array_push($alunos, $row);
    }
    return $alunos;
  }

  function fnFindAlunoById($id){
    $link = getConnection();

    $query = "select * from tbAlunos where id = {$id}";

    $rs = mysqli_query($link, $query);

    return mysqli_fetch_assoc($rs);
  }

  function fnUpdateAluno($id, $nome, $email, $telefone) {
    $link = getConnection();

    $query = "update tbAlunos set nome = '{$nome}', email = '{$email}', telefone = '{$telefone}' where id = {$id}";

    mysqli_query($link, $query);

    if(!mysqli_query($link, $query)) {
      throw new \Exception("Error ao atualizar", 1);
      return false;
    }
    return true;
  }

  function fnDeleteAluno($id){
    $link = getConnection();

    $query = "delete from tbAlunos where id = {$id}";

    mysqli_query($link, $query);

    if(!mysqli_query($link, $query)) {
      throw new \Exception("Error ao excluir", 1);
      return false;
    }
    return true;
  }