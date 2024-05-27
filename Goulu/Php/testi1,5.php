 <!DOCTYPE html>
  <html>
   <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
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
<h3> Tehtävä 28 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
for ($numero = 0; $numero <= 10; $numero++) {<br>
  echo "Näytetään numero $numero. <.br>";<br>
  if($numero < 5 || $numero > 7) {<br>
    echo "Tämä näkyy <.br>";<br>
  };<br>
  <br>
}<br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

for ($numero = 0; $numero <= 10; $numero++) {
  echo "Näytetään numero $numero. <br>";
  if($numero < 5 || $numero > 7) {
    echo "Tämä näkyy <br>";
  };
  
  
}

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 29 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$R1 = 100;<br>
$R2 = 100;<br>
$R3 = 100;<br>
$Rkok;<br>
<br>
function lasku($R1, $R2, $R3) {<br>
$Rkok = 1 / $R1 + 1/ $R2 + 1 / $R3;<br>
$Rkok = 1 / $Rkok;<br>
return $Rkok;<br>
};<br>
<br>
echo "<.br><.br>";<br>
echo "$R1 <.br>";<br>
echo "$R2 <.br>";<br>
echo "$R3 <.br><.br>";<br>
<br>
echo lasku($R1, $R2, $R3);<br>
<br>
echo "<.br><.br>";<br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$R1 = 100;
$R2 = 100;
$R3 = 100;
$Rkok;

function lasku($R1, $R2, $R3) {
$Rkok = 1 / $R1 + 1/ $R2 + 1 / $R3;
$Rkok = 1 / $Rkok;
return $Rkok;
};

echo "<br><br>";
echo "$R1 <br>";
echo "$R2 <br>";
echo "$R3 <br><br>";

echo lasku($R1, $R2, $R3);

echo "<br><br>";

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 30 </h3>
<p>Jotain</p>
<div class="koodi">
<p>

<br>
$ympyraSade = 20;<br>
$Pii = 3.14;<br>
<br>
function laske($ympyraSade, $Pii){<br>
  <br>
$keha = 2 * $Pii * $ympyraSade;<br>
$PintaAla = $ympyraSade * $ympyraSade * $Pii;<br>
<br>
$tulos = "Sade: $ympyraSade <.br>  $keha Cm <.br> $PintaAla Cm <.br><.br>";<br>
<br>
return $tulos;<br>
};<br>
<br>
echo laske($ympyraSade, $Pii);<br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php


$ympyraSade = 20;
$Pii = 3.14;

function laske($ympyraSade, $Pii){

$keha = 2 * $Pii * $ympyraSade;
$PintaAla = $ympyraSade * $ympyraSade * $Pii;

$tulos = "Sade: $ympyraSade <br>  $keha Cm <br> $PintaAla Cm <br><br>";

return $tulos;
};

echo laske($ympyraSade, $Pii);


?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 31 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$Tuomas = array("Tuomas", 25);<br>
$Henri = array("Henri", 27);<br>
$Petteri = array("Petteri", 30);<br>
$Ihminen = $Tuomas;<br>
function etuNimi($Oppilas){<br>
$vuosi = 2024;<br>
$Ika = $Oppilas[1];<br>
$syntynyt = $vuosi - $Ika;<br>
return $syntynyt;<br>
};<br>
echo etuNimi($Tuomas);<br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$Tuomas = array("Tuomas", 25);
$Henri = array("Henri", 27);
$Petteri = array("Petteri", 30);
$Ihminen = $Tuomas;
function etuNimi($Oppilas){
$vuosi = 2024;
$Ika = $Oppilas[1];
$syntynyt = $vuosi - $Ika;
return $syntynyt;
};
echo etuNimi($Tuomas);

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 32 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$sivu1 = 25;<br>
      $sivu2 = 50;<br>
      $teksti1 = "hypotenuusa";<br>
      <br>
      function kolmioLasku($sivu1, $sivu2,$teksti1) {<br>
        echo "Kolmion sivut ovat ".$sivu1." ja ". $sivu2. " jolloin<.br>";<br>
        echo $teksti1." on ".hypot($sivu1,$sivu2);<br>
      }<br>
      <br>
      kolmioLasku($sivu1, $sivu2,$teksti1); <br>
      <br>
</p>
</div>
<div class="vari1"></div>
<?php

$sivu1 = 25;
$sivu2 = 50;
$teksti1 = "hypotenuusa";

function kolmioLasku($sivu1, $sivu2,$teksti1) {
  echo "Kolmion sivut ovat ".$sivu1." ja ". $sivu2. " jolloin<br>";
  echo $teksti1." on ".hypot($sivu1,$sivu2);
}

kolmioLasku($sivu1, $sivu2,$teksti1); 

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 33 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
function yhteenlasku($luku) <br>
      {<br>
      	<br>
      if($luku > 0) {<br>
      $summa = floor($luku);<br>
      };<br>
      <br>
      if($luku < 0 ) {<br>
		$summa = ceil($luku);<br>
      };<br>
      <br>
       return $summa;<br>
       };  <br>
       <br>
      echo yhteenlasku(2.35) . "<.br>";<br>
		echo yhteenlasku(5.55) . "<.br>";<br>
		echo yhteenlasku(-101.2) . "<.br>";<br>
		echo yhteenlasku(-219.7) . "<.br>";<br>
    <br>
</p>
</div>
<div class="vari1"></div>
<?php

function yhteenlasku($luku) 
      {
      	
      if($luku > 0) {
      $summa = floor($luku);
      };
      
      if($luku < 0 ) {
		$summa = ceil($luku);
      };
         
       return $summa;
       };  
      
      echo yhteenlasku(2.35) . "<br>";
		echo yhteenlasku(5.55) . "<br>";
		echo yhteenlasku(-101.2) . "<br>";
		echo yhteenlasku(-219.7) . "<br>";

?> 
</div>


</body>
</html>



<div class="col-6 col-s-6">
<h3> Tehtävä  </h3>
<p>Jotain</p>
<div class="koodi">
<p>



</p>
</div>
<div class="vari1"></div>
<?php



?> 
</div>

