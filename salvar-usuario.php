<?php
   switch(@$_REQUEST["acao"]){

    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $data_nasc = $_POST['data_nasc'];

        if(empty($nome)or empty($email) or empty($senha) or empty($data_nasc))
        {
            print "<script>alert('Preencha todos os campos.')</script>";
            print "<script>location.href='?page=novo'</script>";
        }
        else
        {

        $sql = "INSERT INTO usuarios (nome,email,senha,data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
        $res = $conn-> query($sql);

        if($res == true)
            {
                print "<script> alert('Cadastro realizado com sucesso!')</script>";
                print "<script> location.href='?page=listar';</script>";
            }
            else
            {
                 print "<script> alert('Houve um erro ao cadastrar o usuário. Tente novamente.')</script>";
            }
        }
        break;

    case 'editar';
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $data_nasc = $_POST['data_nasc'];

            if(empty($nome)or empty($email) or empty($senha) or empty($data_nasc))
        {
            print "<script>alert('Preencha todos os campos')</script>";
            print "<script>location.href='?page=novo'</script>";
        }

        else{
            $sql = "UPDATE usuarios SET 
            nome = '{$nome}',
            email = '{$email}',
            senha = '{$senha}',
            data_nasc = '{$data_nasc}'

            where id =".$_REQUEST["id"];
            $res = $conn->query($sql);

        if($res == true)
        {
            print "<script> alert('Alteração realizada com sucesso!')</script>";
            print"<script>  location.href='?page=listar';</script>";
        }
        else
        {
            print"<script>alert('Erro ao editar o usuario')</script>";
        }
        }
        break;

    case 'excluir';
        $sql = "DELETE FROM usuarios WHERE id=" .$_REQUEST["id"];

        $res = $conn -> query($sql);

        if($res == true) 
        {
            print "<script> alert('Usuario deletado com sucesso')</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        else{
            print "<script> alert('Falha ao deletar usuario')</script>";
        }
        break;
}