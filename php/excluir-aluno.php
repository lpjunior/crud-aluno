<?php

    require('./crud.php');

    # verica se o formulário foi preenchido, caso contrário retorna para a página do formullário
    if($_GET['id'] == NULL){
        header('location: error.php?f=access-deny');
        die;
    }

    if(fnDeleteAluno($_GET['id'])) {
        $status = 'del-success';
    } else {
        $status = 'del-fail';
    }
    
    header("location: listagem.php?f={$status}");
    die;