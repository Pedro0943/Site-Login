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

    <link rel="shortcut icon" href="Imagem/icon.png" type="image/x-icon">

    
    <title>Cadastro</title>
</head>
<body>
    <nav id="me_na">
        <div class="container">
            <img src="imagem/icon.png" alt="">
            <h1>Cadastro</h1>
            <div class="cadastro">
                <form action="index.php" method="POST">
                    <div class="input_style">
                        <input class="ajus" type="text" name="nome" id="nome" required>
                        <label for="nome" class="label_input">Nome Completo</label>
                    </div>
                    <br>
                    <div class="input_style">
                        <input class="ajus" type="text" name="telefone" id="" required>
                        <label for="telefone" class="label_input">Telefone</label>
                    </div>
                    <br>
                    <div class="input_style">
                        <label for="dtnasc" id="data_nasc" class="label_input">Data de nacimento:</label>
                        <input class="dtnasc" type="date" name="dtnasc" id="" >
                    </div>
                    <br>
                    <div class="input_style">
                        <input class="ajus" type="email" name="email" id="" required>
                        <label for="email" class="label_input">E-mail</label>
                    </div>
                    <br>
                    <div class="input_style">
                        <input class="ajus" type="password" id="senha" name="senha" required>
                        <label for="senha" class="label_input">Senha</label>                     
                    </div>
                    <input type="checkbox" id="mostrarSenha" onclick="mostrarOuOcultarSenha()"> Mostra senha
                </div>
                <br>
                <input type="submit" name="submit" id = "submit" value="Cadastrar">
            </form>
        </div>
    </nav>    
    <footer class="copy"> 
        <div class="style_copy">
            <h3> Desenvolvedor Web e Programador | Pedro Henrique |</h3>
        </div>
        <div class="style_copy">
            <h4> Copyright © 2024</h4>
        </div>
        <div class="style_body">
            <ul class="icons">
                <li class="social_icons"><a href="https://github.com/Pedro0943"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path></svg></a></li>
                <li class="social_icons"><a href="https://www.linkedin.com/in/pedro-henrique-11636025a/"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg></a></li>
                <li class="social_icons"><a href="https://www.instagram.com/pedroca4004/"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M512 378.7c-73.4 0-133.3 59.9-133.3 133.3S438.6 645.3 512 645.3 645.3 585.4 645.3 512 585.4 378.7 512 378.7zM911.8 512c0-55.2.5-109.9-2.6-165-3.1-64-17.7-120.8-64.5-167.6-46.9-46.9-103.6-61.4-167.6-64.5-55.2-3.1-109.9-2.6-165-2.6-55.2 0-109.9-.5-165 2.6-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6 46.9 46.9 103.6 61.4 167.6 64.5 55.2 3.1 109.9 2.6 165 2.6 55.2 0 109.9.5 165-2.6 64-3.1 120.8-17.7 167.6-64.5 46.9-46.9 61.4-103.6 64.5-167.6 3.2-55.1 2.6-109.8 2.6-165zM512 717.1c-113.5 0-205.1-91.6-205.1-205.1S398.5 306.9 512 306.9 717.1 398.5 717.1 512 625.5 717.1 512 717.1zm213.5-370.7c-26.5 0-47.9-21.4-47.9-47.9s21.4-47.9 47.9-47.9 47.9 21.4 47.9 47.9a47.84 47.84 0 0 1-47.9 47.9z"></path></svg></a></li>                
            </ul>
        </div>
    </footer>

<script src="JavaScript/JavaScript.js"></script>
</body>
</html>