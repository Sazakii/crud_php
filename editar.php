<?php

$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Registros</title>
    <link rel ="stylesheet" href="indexEstilo.css">
</head>
<body>

    <main class="conteudo">
    <section class="formulario">    
    <div >
        <h1 id="titulo-principal">Editor de Usuarios</h1>
        <p id="subtitulo">Atualize as informações dos usuários</p>
        <br>
    </div>
    <form class="formulario" method="POST" action="?page=salvar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>" >
        <input type="hidden" name="acao" value="editar">
        <fieldset class="grupo">
        <div class="campo" >
                <label for="nome"><strong>Nome do usuário</strong></label>
                <input type="text" name="nome" class="form-control" >
            </div>

            <div class="campo">
                <label for="email" ><strong>E-mail</strong></label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="campo">
                <label for="senha"><strong>Senha</strong></label>
                <input type="password" name="senha" class="form-control" >
            </div>
            <div class="campo">
                <label for="data_nasc"><strong>Data de Nascimento</strong></label>
                <input type="date" name="data_nasc" class="form-control">
            </div>

        
        </fieldset>
      <button class="btn btn-success" type="submit" name="submit">Concluir</button>
    </form>
</section>
    </main>
</body>
</html>