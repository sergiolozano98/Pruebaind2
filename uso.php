<?php


 include 'gim.php';

 $semana = new Gym();
//almacenemas los datos de los Hombres
 $semana ->almacenarH($_POST["Lunesh"]);
 $semana ->almacenarH($_POST["Martesh"]);
 $semana ->almacenarH($_POST["Miercolesh"]);
 $semana ->almacenarH($_POST["Juevesh"]);
 $semana ->almacenarH($_POST["Viernesh"]);
 $semana ->almacenarH($_POST["Sabadoh"]);
//almacenemas los datos de las mujeres
 $semana ->almacenarM($_POST["Lunesm"]);
 $semana ->almacenarM($_POST["Martesh"]);
 $semana ->almacenarM($_POST["Miercolesm"]);
 $semana ->almacenarM($_POST["Juevesm"]);
 $semana ->almacenarM($_POST["Viernesm"]);
 $semana ->almacenarM($_POST["Sabadom"]);

 echo "La media de Hombres:".round($semana->MediaHombres());
 echo "<br>";
 echo "La media de Mujeres:".round($semana->MediaMujeres());





 ?>
