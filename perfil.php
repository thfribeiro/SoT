<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("location.index.html");
}

?>

<!DOCTYPE html>

<html>
    <head>
        <title> SoT -  Salvem os Tatus </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/estilo.css"> 

        <link rel="icon" type="imagem/png" href="/img/icon.jpg" />
        <div class="text-center">
            <div class="box1">
                <hr class="linha">
                <a href="https://www.facebook.com/tthiago123"><img src="/img/icon.jpg" alt=EasterEgg width=60 height=60/></a>
                <h1 class="texto">SoT -  Salvem os Tatus</h1>
                <p style="color:black">
                    Página criada com intuito de defesa e combate a caça e maltrato de tatus.
                </p>
                <hr class="linha">
                <p></p>
            </div>
        </div>
        <div  class="container">
            <div class="row">
                <div class="col-4 md-4"></div>
                <div class="col-4 md-4"></div>
                <div class="col-4 md-4">
                    <div style="padding-left: 195%;">
                        <button type="button"  onclick="window.location.assign('sair.php');" class="btn btn-outline-info"> Sair</button>
                    </div>
                </div>
            </div>
        </div>
    </head>
    <body>

    </body>
</html>