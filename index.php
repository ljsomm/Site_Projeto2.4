<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link type="text/css" rel="stylesheet" href="css/main.css">
            <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
            <script type="text/javascript" src="js/main.js"></script>
            <title>Login</title>
        </head>
        <!---->
        <body onload="focar()" id="body">
            <!--LOGIN-->
            <nav class="menu">
            <h1>NOTEC</h1>
            </nav>
            <div class="externa">
                <div class="interna">
                    <form id="frmEnviar" name="frmEnviar" method="POST" action="redirect.php">
                         <label class="label">Usuário</label>
                         <div class="textbox">
                            <input  maxlength="20" type="text" id="user" name="user">
                         </div>
                         <br>
                         <label class="label">Senha</label>
                         <div class="textbox">
                            <input maxlength="20" type="password" id="senha" name="senha">
                         </div>
                         <br>
                        <button type="submit" onclick="return validar()">Logar</button>
                         <!--AGUARDA UMA RESPOSTA DO JAVASCRIPT PARA CONTINUAR-->
                     </form>
                </div>
            </div>
        </body>
    </html>