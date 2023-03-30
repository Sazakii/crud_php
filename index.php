<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="?page=novo">Novo usuário</a>
            <a class="nav-link" href="?page=listar">Listar usuários</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include('conexao/db.php');
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-usuario.php");
                        break;
                    case "listar":
                        include("listar-usuario.php");
                        break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    case "editar":
                        include("editar.php");
                        break;
                    default:
                        print "<h1>Eai Mano</h1>";
                }

            ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>