<?php
    require('./crud.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>C.R.U.D - ALUNOS</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">C.R.U.D</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/crud">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="listagem.php">Lista</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Localizar aluno" aria-label="Buscar">
                        <button class="btn btn-outline-dark" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main style="background-color: rgb(240, 234, 234);">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="shadow p-5 mb-5 bg-body rounded-3 text-center w-50 p-3">
                <?php
                    if($_GET['f'] == 'add-success') {
                        echo '<div class="text-success text-right justify-content-end align-content-end">Gravado com sucesso</div>';
                    } elseif($_GET['f'] == 'add-fail') {
                        echo '<div class="text-danger text-right justify-content-end align-content-end">Falha ao gravar</div>';
                    } elseif($_GET['f'] == 'edt-success') {
                        echo '<div class="text-success text-right justify-content-end align-content-end">Editado com sucesso</div>';
                    } elseif($_GET['f'] == 'edt-fail') {
                        echo '<div class="text-danger text-right justify-content-end align-content-end">Falha ao editar</div>';
                    } elseif($_GET['f'] == 'del-success') {
                        echo '<div class="text-success text-right justify-content-end align-content-end">Excluído com sucesso</div>';
                    } elseif($_GET['f'] == 'del-fail') {
                        echo '<div class="text-danger text-right justify-content-end align-content-end">Falha ao excluir</div>';
                    }
                ?>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Telefone</th>
                        <th colspan="2">Gerenciar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach (fnListAlnos() as $aluno) {

                        ?>
                        <tr>
                            <th scope="row"><?=$aluno['id'] ?></th>
                            <td><?=$aluno['nome'] ?></td>
                            <td><?=$aluno['email'] ?></td>
                            <td><?=$aluno['telefone'] ?></td>
                            <td><a href="edita.php?id=<?=$aluno['id'] ?>"><i class="fa fa-pencil-square-o text-primary" aria-hidden="true"></i></a></td>
                            <td><a href="excluir-aluno.php?id=<?=$aluno['id'] ?>"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>