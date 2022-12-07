<?php

if(isset($_POST['submit'])){

include_once('config.php');

$Email = $_POST['Email'];

$result = mysqli_query($conexao, "INSERT INTO cadastro(Email) values('$Email')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulasexta</title>
    <link rel="stylesheet" href="main.css">
    
</head>
<body>


<div class="container">
        
        <nav class="navbar">

          <img id='logo' src="NetflixLogo.png" alt="LogoNetflix">
          <select name="languages" id="select-languages">
            <option value="ptbr">Portugues</option>
            <option value="en">English</option>
        </select>
        <button id="btn-login">Entrar</button>
        </nav>

        <div class="story-card">
            <h1 class="story-card-tittle">
             Filmes, séries e muito mais. <br/> Sem limites.
            </h1>
            <h2 class="story-card-subtitle" >Assista onde quiser. Cancele quando quiser.</h2>
            <form class = "form-container">
                <h3 class="form-invitation">Pronto para assistir? Informe seu email para criar ou reiniciar sua assinatura.</h3>
            <div class="form-container-email">
                <input id="input-email" name="Email" type="text" placeholder="Email">
                <button id="btn-form"> <a href="https://www.netflix.com/signup/registration?locale=pt-BR">
                    Vamos lá >

                </button>
            </div>
            </form>
        </div>
      
    </div>




</body>
</html>