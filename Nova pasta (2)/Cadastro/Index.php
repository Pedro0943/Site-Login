<?php

    if(isset($_POST['submit'])){

        include_once('conexaophp/testeconexao.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $dtnasc = $_POST['dtnasc'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, senha, telefone, dtnasci) 
        VALUES('$nome', '$email', '$senha', '$telefone', '$dtnasc')");
    
    }
?>


<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    


    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <div class="cadastro">
        <form action="index.php" method="POST">
            <p>Nome</p>
            <input class="ajus" type="text" name="nome" placeholder="Digite seu nome">
            <p>Telefone</p>
            <input class="ajus" type="tel" name="telefone" id="" placeholder="Digite seu telefone">
            <p>Data de Nascimento</p>
            <input class="ajus" type="date" name="dtnasc" id="" >
            <p>E-mail</p>
            <input class="ajus" type="email" name="email" id="" placeholder="Digite seu email">
            <p>Senha</p>
            <input class="ajus" type="password" id="senha" name="senha" placeholder="Digite sua senha">   
            <input type="checkbox" id="mostrarSenha" onclick="mostrarOuOcultarSenha()"> Mostra senha

  
        
     
    </div>
        <input type="submit" name="submit" id = "submit" value="Cadastrar">
</form>

<script src="JavaScript/JavaScript.js"></script>
</body>
</html>