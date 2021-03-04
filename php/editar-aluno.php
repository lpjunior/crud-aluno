<?php

    require('./crud.php');

    # verica se o formulário foi preenchido, caso contrário retorna para a página do formullário
    if($_POST['txtId'] == NULL || $_POST['txtNome'] == NULL || $_POST['txtEmail'] == NULL || $_POST['txtTel'] == NULL){
        header('location: error.php?f=access-deny');
        die;
    }

    if(fnUpdateAluno($_POST['txtId'], $_POST['txtNome'], $_POST['txtEmail'], $_POST['txtTel'])) {
        $status = 'edt-success';
    } else {
        $status = 'edt-fail';
    }
    
    header("location: listagem.php?f={$status}");
    die;