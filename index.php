<?php
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
        <script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/registermodul.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <script></script>
       </head>
<body>

<div id="background"></div>
<!--Einbinden der Navigation -->
<?php include 'html/navigation.php'; ?>

</div>
<div class=" wrapper">
    <section class="content">
        
        <div class="col-6 col-sm-3 placeholder">
            <img src="images/cepalogo.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h1>Cepa</h1>
              <div class="text-muted">Something else</div>
            </div>
        <p class="sub-title"><strong>Finde deine große Pfanne</strong> <br /> teflonpfanne, zart besaitet oder ein guter mix ;-)</p>
<!--Einbinden des Registermoduls -->
<?php include 'html/registermodul.php'; ?>
        </div>
        </section>	
       
</body>
</html>
