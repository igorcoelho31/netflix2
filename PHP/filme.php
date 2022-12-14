<?php

if(isset($_POST['submit'])){

include_once('config.php');

$email = $_POST['E-mail'];
$senha = $_POST['Senha'];

$result = mysqli_query($conexao, "INSERT INTO usuario(email, senha) values('$email', '$senha')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Netflix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/filme.css">
  
</head>

<body>

<div class="nav" id="nav">
    <img src="./img/netflix-logo.png" alt="" class="nav__logo">
    <img src="./img/netflix-avatar.png" alt="" class="nav__avatar">
</div>

<header>
<div class="banner">
    <div class="banner__contents">
        <h1 class="banner__title"> La Casa de Papel</h1>
        <div class="banner__buttons">
            <button class="banner__button">Assistir</button>
            <button class="banner__button">Minha Lista</button> 
            
        </div>
        <div class="banner__description">
            La Casa de Papel é uma série de televisão de drama policial espanhola criada por Álex Pina. A trama traça dois assaltos muito preparados liderados por um homem conhecido como O Professor (Álvaro Morte), um na Casa da Moeda Real da Espanha e outro no Banco Central da Espanha.
        </div>
    </div>
    <div class="banner__fadeBottom"></div>
</div>    
<div class="row">     
<h2>Só na Netflix</h2>
<div class="row__posters">
<img src="./img/large-movie1.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie2.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie3.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie4.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie5.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie6.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie7.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie8.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie1.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie2.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie3.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie4.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie5.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie6.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie7.jpg" alt="" class="row__poster row__posterLarge">
<img src="./img/large-movie8.jpg" alt="" class="row__poster row__posterLarge">


</div>
</div>

<div class="row">     
    <h2>Em alta</h2>
    <div class="row__posters">
        <button type="button">Click Me!</button>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <button type="button">Click Me!</button>
    </div>

</div>

<div class="row">
    <h2>Top 10</h2>
    <div class="row__posters">
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    </div>
</div>

<div class="row">
    <h2> Ação </h2>
    <div class="row__posters">
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    </div>
</div>

<div class="row">
    <h2> Comédia </h2>
    <div class="row__posters">
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    </div>
</div>

<div class="row">
    <h2> Terror </h2>
    <div class="row__posters">
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    </div>
</div>

<div class="row">
    <h2> Romance </h2>
    <div class="row__posters">
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    </div>
</div>

<div class="row">
    <h2> Documentários </h2>
    <div class="row__posters">
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie1.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie2.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie3.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie4.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie5.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie6.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie7.jpg" alt="" class="row__poster "/>
    <img src="./img/small-movie8.jpg" alt="" class="row__poster "/>
    </div>
</div>

<script>
   const nav = document.getElementById('nav');

   window.addEventListener('scroll', () => {
    if (window.scrollY >=100) {
        nav.classList.add('nav__black')
    }else {
        nav.classList.remove('nav__black')
    }
   })
</script>
  
</body>

</html>
</body>
</html>