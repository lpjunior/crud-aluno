<?php

    require('./crud.php');

    # verica se o formulário foi preenchido, caso contrário retorna para a página do formullário
    if($_POST['txtNome'] == NULL || $_POST['txtEmail'] == NULL || $_POST['txtTel'] == NULL){
        header('location: error.php?f=access-deny');
        die;
    }

    if(fnAddAluno($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtTel'])) {
        $status = 'add-success';
    } else {
        $status = 'add-fail';
    }
    
    header("location: listagem.php?f={$status}");
    die;