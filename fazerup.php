<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/corpo.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/main.js"></script>
    <title>NOTEC - Sobre</title>
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

<div id="cabe">

<h2>Fazer upload do seus textos</h2>
<form method="POST" action="enviafiles.php" enctype="multipart/form-data">
    <input id="arquivo" name="arquivo" type="file">
    <br>
    <input type="submit">
</form>
</div>
</body>