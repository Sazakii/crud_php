<h1>Listar usuário</h1>

<h1 style= "color: white; text-align: center;" >Listar usuarios</h1>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="indexEstilo.css">
</head>
<body>
    
</body>
</html>


<?php
$sql = "SELECT * FROM usuarios";

$res = $conn -> query($sql);

$qtd = $res -> num_rows;

if($qtd > 0 )
{
   print "<table class='table'>";
    print "<th>ID</th>";
    print "<th>nome</th>";
    print "<th>Email</th>";
    print "<th>Senha</th>";
    print "<th>Data de Nascimento</th>";
    
    while($row = $res->fetch_object() ){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->senha."</td>";
        print "<td>".$row ->data_nasc."</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-outline-info'>Editar</button>
                <button onclick=\" if(confirm('Você realmente deseja fazer isso?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-outline-danger'>Excluir</button>
                </td>";
        print "</tr>";
        
    }
    print "</table>";
}else{
    print("<p class='alert alert-danger'>Nenhum cadastro encontrado!!!</p>");
}