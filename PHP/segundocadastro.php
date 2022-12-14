<?php

if (isset($_POST['submit'])) {

    include_once('config.php');

    $email = $_POST['E-mail'];
    $senha = $_POST['Senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(email, senha) values('$email', '$senha')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulasexta</title>
    <link rel="stylesheet" href="segundocadastro.css">


</head>

<body>


    <header>
        <img src="NetflixLogo.png">

        <div class="entrar">
            <a href="entrar.html" target="_blank" rel="external" style="color: black; text-decoration-line: none;">Entrar</a>
        </div>

    </header>



    <form action="index.php" method="POST">

        <div class="login">
            <form class="caixa">



                <div class="ajustar">

                    <h1
                        style="font-size:30px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif">
                        Assita um mês grátis</h1>

                    <P
                        style="font-size:10px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif">
                        Faltam só dois passos!</P>

                    <P
                        style="font-size:10px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif">
                        Nós também destestamos formulários.</P>

                    <p
                        style="font-size:20px; font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif">
                        Crie sua conta.</p>




                    <br>
                    <label></label>
                    <input placeholder="Digite o seu email" type="text" name="E-mail" id="E-mail" class="E-mail" style=" width:320px;
height:50px; background-color: white; border-radius: 5px; border: solid 1; padding-left: 20px; 
font-weight: bold;" />
                    <br>




                    <br>
                    <br>
                    <label></label>
                    <input placeholder="Digite a sua senha" type="password" name="Senha" style=" width:320px;
height:50px;  border-radius: 5px; border: solid 1; padding-left: 20px; font-weight: bold;" />
                    <br>
                    <br>




                    <input type="submit" name="submit" id="submit" value="CONTINUAR"
                        style="background-color:red; width:347px;
height:50px; border-radius: 5px;  border: solid 0; padding-left: 10px; color:white; font-weight: bold; cursor:pointer;  " />
                    <br>
                    <br>
                    <a href="https://www.netflix.com/br/LoginHelp">Precisa de ajuda?</a>

                </div>
        </div>
    </form>




</body>

</html>
