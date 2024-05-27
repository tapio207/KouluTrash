<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tehtävä 27</title>
    <link rel="stylesheet" href="./Style.css">
</head>
<body>
    
<div class="col-3 col-s-3">
<div class="menu">
<?php include "SideMenu.php" ?>
</div>
</div>

<div id="container">


<div class="col-6 col-s-6">
<h3> Tehtävä 27 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$annettuKirjain = "D";<br>
  $rivi = 0;<br>
  $tick = 0;<br>
  <br>
  echo "<.br><.br>";<br>
  <br>
  $kirjain = array("A", "B", "C", "D", "E", "F");<br>
  $nimet = array("A"=>"Anthony", "B"=>"Bertha", "C"=>"Cecilia", "D"=>"David", "E"=>"Edward", "F"=>"Felicia");<br>
  <br>
  <br>
  do{<br>
  if($tick < 2){<br>
	echo $nimet[$kirjain[$rivi]] , "<.br>"; <br>
	$rivi++;<br>
  };<br>
  if($annettuKirjain == $kirjain[$rivi] || $tick == 1){<br>
    $tick++;<br>
   };<br>
} while($rivi <= 5 );<br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php

$annettuKirjain = "D";
  $rivi = 0;
  $tick = 0;

  echo "<br><br>";

  $kirjain = array("A", "B", "C", "D", "E", "F");
  $nimet = array("A"=>"Anthony", "B"=>"Bertha", "C"=>"Cecilia", "D"=>"David", "E"=>"Edward", "F"=>"Felicia");


  do{
  if($tick < 2){
	echo $nimet[$kirjain[$rivi]] , "<br>"; 
	$rivi++;
  };
  if($annettuKirjain == $kirjain[$rivi] || $tick == 1){
    $tick++;
   };
} while($rivi <= 5 );
    

?> 
</div>



</div>


</body>
</html>