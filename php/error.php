<?php

$status = $_GET['f'];

switch ($status) {
    case 'access-deny':
        $cod1 = '4';
        $cod2 = '3';
        $msg = 'Acesso negado! Talvez você tenha tentado pular alguma etapa. Verifique como está acessando nosso ambiente.';
        break;

    default:
        $cod1 = '4';
        $cod2 = '4';
        $msg = 'página não encontrada';
        break;
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #95c2de;
        }

        .mainbox {
            background-color: #95c2de;
            margin: auto;
            height: 600px;
            width: 600px;
            position: relative;
        }

        .err {
            color: #ffffff;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 11rem;
            position: absolute;
            left: 20%;
            top: 8%;
        }

        .far {
            position: absolute;
            font-size: 8.5rem;
            left: 42%;
            top: 15%;
            color: #ffffff;
        }

        .err2 {
            color: #ffffff;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 11rem;
            position: absolute;
            left: 68%;
            top: 8%;
        }

        .msg {
            text-align: center;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1.6rem;
            position: absolute;
            left: 16%;
            top: 45%;
            width: 75%;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="mainbox">
        <div class="err"><?= $cod1 ?></div>
        <i class="far fa-question-circle fa-spin"></i>
        <div class="err2"><?= $cod2 ?></div>
        <div class="msg"><?= $msg ?><p>Volte para a <a href="/crud/index.html">página inicial </a> e tente novamente.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>