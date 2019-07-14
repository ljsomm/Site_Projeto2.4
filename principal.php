<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/corpo.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/main.js"></script>
    <title>NOTEC - Home</title>
</head>


<?php
session_start();
if(!isset($_SESSION['login']) || !isset($_SESSION['senha']) ){
 
header('Location: index.php');

}
?>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <img class="loguin" src="images/notec.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="principal.php">Home</a>
</li>
      <li class="nav-item">
        <a class="nav-link" href="#">Uploads</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
    </ul>
    <form id="form" class="form-inline">
      <input class="form-control" type="search" placeholder="Procurar">
      <button  type="submit"><img src="images/lupa.png" class="lupa"></button>
    </form>
    <ul class="menuz">
      <li><img src="images/settings.png" class="bug">
      <ul> 
      <li><a href="config.php">Configurações</a></li>
      <li><a href="redirect2.php">Log out</a></li>
 
    </ul>
    </li>
     </ul>
  </div>
</nav>
<br>
<div id="cabe">
<?php 
echo "<h2 id='bem'>Seja bem-vindo(a), " .  $_SESSION['login'] . "!</h2>";
?>
</div>
<br>
<div class="corpo-igual">
<h2>Fazer upload de notícias</h2>
<p>Faça uploads das notícias que você mais gosta, ou que seja de suma importância a publicação/upload.</p>
<a href="fazerup.php">Fazer Upload</a>
</div>

<div class="corpo-igual-direita">
<h2>Slide</h2>
<ul class="slider">
<li>
<input type="radio" id="slide1" name="slide" checked>
<label for="slide1"></label>
  <img src="images/lupa.png">
</li>

<li>
<input type="radio" id="slide2" name="slide">
<label for="slide2"></label>
  <img src="images/settings.png">
</li>
</ul>
</div>




<br>
<br>
<div class="a">
<div class="b"></div>
</div>
        
</body>