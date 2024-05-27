<!DOCTYPE html>
  <html>
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Style.css">  
    <style>
	.vari1{color: green;}
	.vari2{color: red;}
	.vari3{color: blue;}
	.vari4{color: pink;}
	
	  .esimerkki {
     background-color: RGB(248, 244, 253);
     width: 50%;
     border: 1px solid RGB(41, 20, 82);
     padding: 20px;
     margin: 20px;
box-shadow: 7px 7px 5px grey;
  }
  .koodisini{
     color: darkblue;
  }

    </style>
   </head>

   <body>


<div class="col-3 col-s-3">
<div class="menu">
<?php include "SideMenu.php" ?>
</div>
</div>

<div id="containers">

<div class="col-6 col-s-6">
<h3> Tehtävä 34 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
$R1 = 100;<br>
$R2 = 100;<br>
$R3 = 100;<br>
<br>

function lasku($s1, $s2, $s3){<br>
$Rkok = 1 / $s1 + 1/ $s2 + 1 / $s3;<br>
$Rkok = 1 / $Rkok;<br>
return $Rkok;<br>
};<br>
<br>
echo lasku($R1, $R2, $R3);<br>
</p>
</div>
<div class="vari2">

<?php

$R1 = 100;
$R2 = 100;
$R3 = 100;


function lasku($s1, $s2, $s3){
$Rkok = 1 / $s1 + 1/ $s2 + 1 / $s3;
$Rkok = 1 / $Rkok;
return $Rkok;
};

echo lasku($R1, $R2, $R3);

?> 

</div>
</div>



<div class="col-6 col-s-6">
<h3> Tehtävä 35</h3>
<p>Päiväys</p>
<div class="koodi">
<p>

echo date("l j F Y h:i A") . "<br>";

$hour = date(h); <br>
$min = date(i); <br>
echo $hour; <br>
echo $min; <br>
<br>
switch(true) {<br>
  <br>
  case ($hour <= 9 && $hour >= 5):<br>
    echo "<.br> Hyvää huomenta";<br>
    break;<br>
    case ($hour >= 9 && $min > 0 && $hour <= 14):<br>
      echo "<.br> Hyvää päivää";<br>
      break;<br>
      case ($hour >= 14 && $min > 0 && $hour <= 18):<br>
        echo "<.br> Hyvää iltapäivää";<br>
        break;<br>
        case ($hour >= 18 && $min > 0 && $hour <= 22):<br>
          echo "<.br> Hyvää iltaa";<br>
          break;<br>
            case ($hour >= 22 && $min > 0 || $hour <= 4):<br>
            echo "<.br> Rauhallista yötä";<br>
            break;<br>
};<br>
<br>
echo "<br><br>";

</p>
</div>
<div class="vari2"></div>
<?php

echo date("l j F Y h:i A") . "<br>";

$hour = date(h);
$min = date(i);
echo $hour;
echo $min;

switch(true) {

  case ($hour <= 9 && $hour >= 5):
    echo "<br> Hyvää huomenta";
    break;
    case ($hour >= 9 && $min > 0 && $hour <= 14):
      echo "<br> Hyvää päivää";
      break;
      case ($hour >= 14 && $min > 0 && $hour <= 18):
        echo "<br> Hyvää iltapäivää";
        break;
        case ($hour >= 18 && $min > 0 && $hour <= 22):
          echo "<br> Hyvää iltaa";
          break;
            case ($hour >= 22 && $min > 0 || $hour <= 4):
            echo "<br> Rauhallista yötä";
            break;
};

echo "<br><br>";

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 36</h3>
<p>nimi</p>
<div class="koodi">
<p>

<.form action="tervetuloa.php" method="POST"> <br>
      Nimi: <.input type="text" name="nimi"><br> 
      Sähköposti: <.input type="text" name="sahkoposti"><br> 
      <.input type="submit" value="Lähetä"><br>
    <./form><br>
    <br>
    <.form action="Testi2.php" method="POST"> <br>
      R1: <.input type="text" name="R1"><br> 
      R2: <.input type="text" name="R2"><br> 
		R3: <.input type="text" name="R3"><br> 
      <.input type="submit" value="Lähetä"><br>
    <./form><br>
    <br>
	<,?php<br>
	<br>
	$vastaus = 1 / $_POST["R1"] + 1 / $_POST["R2"] + 1 / $_POST["R3"];<br>
	$vastaus = 1 / $vastaus;<br>
	echo "<.br> $vastaus";<br>
	<br>
	echo "<.br><.br><.br>";<br>
	?>	<br>
  <br>
<./div><br>
<br>
</p>

</div>
<div class="vari2"></div>



<form action="tervetuloa.php" method="POST"> 
Nimi: <input type="text" name="nimi"><br> 
Sähköposti: <input type="text" name="sahkoposti"><br> 
<input type="submit" value="Lähetä">
</form>

<form action="Testi2.php" method="POST"> 
R1: <input type="text" name="R1"><br> 
R2: <input type="text" name="R2"><br> 
R3: <input type="text" name="R3"><br> 
<input type="submit" value="Lähetä">
</form>

<?php

$vastaus = 1 / $_POST["R1"] + 1 / $_POST["R2"] + 1 / $_POST["R3"];
$vastaus = 1 / $vastaus;
echo "<br> $vastaus";

echo "<br><br><br>";
?>	



</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 37</h3>
<p>nimi</p>
<div class="koodi">
<p>
<br>
<.?php<br>
<br>
$R11 = $R22 = $R33 =  $valinta ="";<br>
<br>
if ($_SERVER["REQUEST_METHOD"] == "POST") {<br>
  $R11 = test_input($_POST["R11"]);<br>
  $R22 = test_input($_POST["R22"]);<br>
  $R33 = test_input($_POST["R33"]);<br>
  $valittu = test_input($_POST["valittu"]);<br>
}<br>
<br>
function test_input($data) {<br>
  $data = trim($data);<br>
  $data = stripslashes($data);<br>
  $data = htmlspecialchars($data);<br>
  return $data;<br>
}<br>
?><br>
<br>
<br>
<br>
<.form method="post" action="<.?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <br>
  R1: <.input type="text" name="R11"><br>
  <.br><.br><br>
  R2: <.input type="text" name="R22"><br>
  <.br><.br><br>
  R3: <.input type="text" name="R33"><br>
  <.br><.br><br>
  Miten lasketaan:<br>
  <.input type="radio" name="valittu" value="Rinta">Rinnakkais<br>
  <.input type="radio" name="valittu" value="Sarja">Sarja<br>
  <.br><.br><br>
  <.input type="submit" name="submit" value="Lähetä">  <br>
<./form><br>
<br>
<.?php<br>
<br>
<br>
if($valittu == "Rinta"){<br>
$vastauss = 1 / $R11 + 1 / $R22 + 1 / $R33;<br>
$vastauss = 1 / $vastauss;<br>
};<br>
if($valittu == "Sarja"){<br>
$vastauss = $R11 + $R22 + $R33;<br>
};<br>
<br>
<br>
echo "<.h3>Annoit seuraavat arvot:<./h3>";<br>
echo  " R1 = $R11";<br>
echo "<.br>";<br>
echo " R2 = $R22";<br>
echo "<.br>";<br>
echo " R3 = $R33";<br>
echo "<.br>";<br>
echo "Rkok = $vastauss";<br>
echo "<.br>";<br>
<br>


?><br>

<./div><br>
<br>

</p>
</div>
<div class="vari2"></div>

<?php

$R11 = $R22 = $R33 =  $valinta ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $R11 = test_input($_POST["R11"]);
  $R22 = test_input($_POST["R22"]);
  $R33 = test_input($_POST["R33"]);
  $valittu = test_input($_POST["valittu"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  R1: <input type="text" name="R11">
  <br><br>
  R2: <input type="text" name="R22">
  <br><br>
  R3: <input type="text" name="R33">
  <br><br>
  Miten lasketaan:
  <input type="radio" name="valittu" value="Rinta">Rinnakkais
  <input type="radio" name="valittu" value="Sarja">Sarja
  <br><br>
  <input type="submit" name="submit" value="Lähetä">  
</form>

<?php


if($valittu == "Rinta"){
$vastauss = 1 / $R11 + 1 / $R22 + 1 / $R33;
$vastauss = 1 / $vastauss;
};
if($valittu == "Sarja"){
$vastauss = $R11 + $R22 + $R33;
};


echo "<h3>Annoit seuraavat arvot:</h3>";
echo  " R1 = $R11";
echo "<br>";
echo " R2 = $R22";
echo "<br>";
echo " R3 = $R33";
echo "<br>";
echo "Rkok = $vastauss";
echo "<br>";



?>

</div>


 
</div>


</div>

</body>
</html>

