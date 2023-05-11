<?php

    function adicionarContato($conexao, $nome, $email, $senha){
        $sql = "INSERT INTO Contato(nome, email, senha) VALUES('$nome', '$email', '$senha')";

        //executa o sql na conexao informada
        if(mysqli_query($conexao, $sql)){
            echo "<div class='card-panel green accent-3'>Contato cadastrado com sucesso!</div>";
        }else{
            echo "<div class='card-panel red darken-4'>Contato não cadastrado!</div>";
        }
    }

    function listarContatos($conexao){
        $sql = "SELECT * FROM Contato";
        $listaContatos = [];
        $resultado = mysqli_query($conexao, $sql);

        /*
        para cada registro associado ao resultado do select,
        insira esse registro no array listaContatos
        */
        while($contato = mysqli_fetch_assoc($resultado)){
            array_push($listaContatos, $contato);
        }

        return $listaContatos;
    }

    function exibeContato($conexao, $id){
        $sql = "SELECT * FROM Contato WHERE id = $id";
        $listaContatos = [];
        $resultado = mysqli_query($conexao, $sql);

        while($contato = mysqli_fetch_assoc($resultado)){
            array_push($listaContatos, $contato);
        }

        return $listaContatos;
    }

    function alterarContato($conexao, $id, $nome, $email, $senha){
        //monta o sql conforme os parâmetros passados
        $sql = "UPDATE Contato SET nome = '$nome', email = '$email'";
        if($senha != ""){
            $senhaC = md5($senha);
            $sql .= ", senha = '$senhaC'";
        }
        $sql .= " WHERE id = $id";
        
        return mysqli_query($conexao, $sql);
    }

    function excluirContato($conexao, $id){
        $sql = "DELETE FROM Contato Where id = $id";

        if(mysqli_query($conexao, $sql)){
            header('Location: ./index.php?page=Contatos'); //redireciona o usuário para o caminho informado.
        }else{
            echo "<div class='card-panel red darken-4'>Contato não exluido cadastrado!</div>";
        }
    }