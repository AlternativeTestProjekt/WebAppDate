<?php
//include 'lib/connect.php';
include 'lib/functions.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="./">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Match</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link" href="#">Kontakt</a>
                
                <form id="inputForm" class="form-inline my-2 my-lg-0">
                    <input type="text" id="inputUsername" class="form-control mr-sm-2" placeholder="Benutzername eingeben">
                    <input type="password" id="inputPasswort" class="form-control mr-sm-2" placeholder="Passwort eingeben">
                    <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Login</button>
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Registrieren</button>
                </form>
            </div>
        </div>
  </nav>
    <div id="botbar" class="col-md-12"><span></span><span>Userbild 1 | Userbild 2 | Userbild 3 usw.</span></div>
</body>
</html>
