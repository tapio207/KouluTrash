<!DOCTYPE HTML> 
<html lang="en"> 
<html> 
<head>
 <meta charset="UTF-8"> 
 <title>TESTISIVU</title>
 <style>
  body{
   background-color: #505050;
   color: yellow;
  }
  .container {
    position: sisalto;
  }
  .ilmoitus {
	position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;	
  }
 </style>
</head>
<body>
 
<?php
  $viestit = fopen("viestit.txt","a")
              or die("Tuntematon tiedosto.");
    
   $uusi = "\nNimi: ".$_POST["Nimi"].
           "\nEmail: ".$_POST["Sahkoposti"].
		   "\nViesti: ".$_POST["Viesti"]."\n";
   fwrite($viestit,$uusi);
  
  fclose($viestit);	 	  
 ?>
 <div class="sisalto">
  <div class="ilmoitus">
   <p> Kiitos yhteyden otostasi.<br> Otamme pikaisesti yhteyttä sinuun.<br>
   (ilmoitus sulkeutuu automaattisesti 4 sekunnin kuluttua)</p>
  </div>
 </div> 
 <script type="text/javascript">
  (function(){
   setTimeout(function(){
     window.location="http://tietokanta.dy.fi/softa24b/Pekki/New%20Php/Php/Teht39/demoviesti.php#Paluu";
   },4000); /* 1000 = 1 second*/
  })();
 </script>
 <!-- HUOM !! scriptissä yllä, location:iin linkki sinne missä lähettävä lomake on sijaitsee www-palvelimella -->
</body>
</html>