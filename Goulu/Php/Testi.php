<!DOCTYPE html>
  <html>
   <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <style>
    #Teht5{color: blue;}
    #teht6{
    color:Rgb(132,0,230);    
    font-family: 'Satisfy', cursive;
    }
    #nabbi1{
      width: 20px;
      height: 20px;
    }
    </style>
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
<h3> Tehtävä 1-4 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
echo "<h3> Luku 1-3 </h3><br>";
<br>
  echo "Jukolan talo sijaitsee eteläisessä Hämeessä.<br>
  Karhunmetsästyksessä kuollut isäntä on jättänyt talon viljelykset  hunningolle,<br>
  emäntä on jäänyt huolehtimaan talosta seitsemän poikansa kanssa.<br>
  Veljeksistä vanhin on Juhani, seuraavaksi tulevat kaksoset Tuomas ja Aapo, <br>
  Simeoni sekä kaksoset Timo ja Lauri. Veljessarjan nuorin on nimeltään Eero. <br>
  Nuorena pojat olivat välillä aika vallattomia. Kerran, Eeron vielä ollessa äitinsä helmoissa kotona,<br>
  kuusi vanhinta veljestä varasti naapurista kananmunia ja karkasi sitten metsään. <br>
  Karkulaisten elämä metsässä kesti muutaman päivän ennen kuin äiti apujoukkoineen löysi heidät.  <br>
  Seurasi kova löylytys.<br><br>
  <br>
  echo "<h3> Luku 2 </h3><br>
  echo "Veljekset lähtevät porukalla kosimaan Venlaa. <br>
  Lauri jää vahtimaan veljiensä tavaroita sillä aikaa kun muut menevät sisälle Männistön mökkiin.<br>
  Eero aukaisee muille oven, mutta jää itse ulkopuolelle. Kosinta ei onnistu, <br>
  Venlan äiti lähettää pojat kiivaasti ulos. Pohtiessaan epäonnensa syytä veljet kohtaavat naapurikylän Toukolan poikia,<br>
  jotka Kissalan Aapelin klarinetin säestyksellä laulavat pilkkalaulun Jukolan pojista. <br>
  Seitsemän miehen voima suututtaa veljekset niin, että syntyy tuima taistelu, jonka toukolalaiset häviävät. <br>
  Nöyryyttääpä Juhani vielä yhtä toukolalaista pannen tämän hakemaan abc-kirjansa ojasta, <br>
  minne se on tappelun tuoksinassa lentänyt, ja antamaan sille suukon.<br>
  <br>
  <br>
</p>
</div>
<div class="vari1"></div>
<?php

echo "<h3> Luku 1 </h3><br>";
echo "Jukolan talo sijaitsee eteläisessä Hämeessä.  Karhunmetsästyksessä kuollut isäntä on jättänyt talon viljelykset  hunningolle, emäntä on jäänyt huolehtimaan talosta seitsemän poikansa kanssa. Veljeksistä vanhin on Juhani, seuraavaksi tulevat kaksoset Tuomas ja Aapo, Simeoni sekä kaksoset Timo ja Lauri. Veljessarjan nuorin on nimeltään Eero. Nuorena pojat olivat välillä aika vallattomia. Kerran, Eeron vielä ollessa äitinsä helmoissa kotona, kuusi vanhinta veljestä varasti naapurista kananmunia ja karkasi sitten metsään. Karkulaisten elämä metsässä kesti muutaman päivän ennen kuin äiti apujoukkoineen löysi heidät.  Seurasi kova löylytys.<br>";

echo "<h3> Luku 2 </h3><br>";
echo "Veljekset lähtevät porukalla kosimaan Venlaa. Lauri jää vahtimaan veljiensä tavaroita sillä aikaa kun muut menevät sisälle Männistön mökkiin. Eero aukaisee muille oven, mutta jää itse ulkopuolelle. Kosinta ei onnistu, Venlan äiti lähettää pojat kiivaasti ulos. Pohtiessaan epäonnensa syytä veljet kohtaavat naapurikylän Toukolan poikia, jotka Kissalan Aapelin klarinetin säestyksellä laulavat pilkkalaulun Jukolan pojista. Seitsemän miehen voima suututtaa veljekset niin, että syntyy tuima taistelu, jonka toukolalaiset häviävät. Nöyryyttääpä Juhani vielä yhtä toukolalaista pannen tämän hakemaan abc-kirjansa ojasta, minne se on tappelun tuoksinassa lentänyt, ja antamaan sille suukon.<br><br>";


?> 
</div>
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 4 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$luku1 = 3;<br>
$luku2 = 7;<br>
$luku3 = 70;<br>
<br>
$tulos = $luku1 + $luku2 + $luku3;<br>
<br>
echo "$tulos <br>
<br>
</p>
</div>
<div class="vari2">

<?php

$luku1 = 3;
$luku2 = 7;
$luku3 = 70;

$tulos = $luku1 + $luku2 + $luku3;

echo "$tulos <br>";

?> 

</div>
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 5 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$R1 = 4;<br>
$R2 = 6;<br>
$R3 = 8;<br>
<br>
$RVastaus = $R1 + $R2 + $R3 / 3;<br>
<br>
echo "$RVastaus <br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$R1 = 4;
$R2 = 6;
$R3 = 8;

$RVastaus = $R1 + $R2 + $R3 / 3;

echo "$RVastaus <br><br>";

?> 
</div>

<div class="col-6 col-s-6">
<h3> Tehtävä 6 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$Ateksti = " \"Lähes kaikki suuri on nuorten tekemää.\" - Benjamin Franklin<br>
$Bteksti = " \"Nuoressa ei huilaaminen mene hukkaan.\" - Suomalainen sananlasku<br>
$Cteksti = " \"Nuoret ovat säännöllisesti ajattelemattomia.\" - Homeros<br>
<br>
echo $Ateksti, $Bteksti, $Cteksti,<br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php

$Ateksti = " \"Lähes kaikki suuri on nuorten tekemää.\" - Benjamin Franklin<br> ";
$Bteksti = " \"Nuoressa ei huilaaminen mene hukkaan.\" - Suomalainen sananlasku<br>";
$Cteksti = " \"Nuoret ovat säännöllisesti ajattelemattomia.\" - Homeros<br>";

echo $Ateksti, $Bteksti, $Cteksti, "<br>";

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 7 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$jannite = array(10, 6, 9, 0);<br>
$janniteKok = $jannite[0] + $jannite[1] + $jannite[2] / 3;<br>
<br>
echo "R1 = $jannite[0] R2 = $jannite[1] R3 = $jannite[2]<br> R4 = $jannite[3] Rkok = $janniteKok<br><
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$jannite = array(10, 6, 9, 0);
$janniteKok = $jannite[0] + $jannite[1] + $jannite[2] / 3;

echo "R1 = $jannite[0]<br> R2 = $jannite[1]<br> R3 = $jannite[2]<br> R4 = $jannite[3]<br> Rkok = $janniteKok<br><br>";


?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 8 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$aforismit = array(   <br>
array(" \"Lähes kaikki suuri on nuorten tekemää.\"", " \"Nuoressa ei huilaaminen mene hukkaan.\"", " \"Nuoret ovat säännöllisesti ajattelemattomia.\"" ),<br>
array(" - Benjamin Franklin ", " - Suomalainen sananlasku", " - Homeros")<br>
);<br>
<br>
echo <br>
$aforismit[0][0], $aforismit[1][0], "<br>
$aforismit[0][1], $aforismit[1][1], "<br>
$aforismit[0][2], $aforismit[1][2], "<br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php

$aforismit = array(   
  array(" \"Lähes kaikki suuri on nuorten tekemää.\"", " \"Nuoressa ei huilaaminen mene hukkaan.\"", " \"Nuoret ovat säännöllisesti ajattelemattomia.\"" ),
  array(" - Benjamin Franklin ", " - Suomalainen sananlasku", " - Homeros")
);

echo 
$aforismit[0][0], $aforismit[1][0], "<br>",
$aforismit[0][1], $aforismit[1][1], "<br>",
$aforismit[0][2], $aforismit[1][2], "<br><br>";


?> 
</div>

<div class="col-6 col-s-6">
<h3> Tehtävä 9 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$hedelmat = array("Mango", "Kiivi", "Meloni", "banaani");<br>
echo count($hedelmat), "<br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php

$hedelmat = array("Mango", "Kiivi", "Meloni", "banaani");
echo count($hedelmat), "<br><br>";


?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 10 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$varasto = array(<br>
             array(1, 2, 3, 4, 5, 6, 7),<br>
             array(8, 9, 10, 11, 12, 13, 14),<br>
             array(15, 16, 17, 18, 19, 20, 21),<br>
            );<br>
            <br>
  for ($rivi = 0; $rivi <= 2; $rivi++) {<br>
  for ($sarake = 0; $sarake <= 6; $sarake++){<br>
  echo $varasto[$rivi][$sarake], ", ";<br>
  }<br>
  echo br <br>
};<br>
<br>
echo br <br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php

$varasto = array(
  array(1, 2, 3, 4, 5, 6, 7),
  array(8, 9, 10, 11, 12, 13, 14),
  array(15, 16, 17, 18, 19, 20, 21),
 );

for ($rivi = 0; $rivi <= 2; $rivi++) {
for ($sarake = 0; $sarake <= 6; $sarake++){
echo $varasto[$rivi][$sarake], ", ";
}
echo "<br>";
};

echo "<br><br>";


?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 11-12 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
echo "table tbody tr><br>
                   th> Oppilas /th><br>
                   th> 10 /th><br>
                   th> 20 /th><br>
                   th> 30 /th><br>
                   th> 40 /th><br>
                   th> 50 /th><br>
                   th> 70 /th><br>
                   th> yht /th><br>
                   th> arvosana/th><br>
                   /tr>";<br>
                   <br>
         $varasto2 = array(<br>
          array("Matti", "Pekka", "Juhani"),<br>
          array(1, 2, 3, 4, 5, 6, 7),<br>
          array(8, 9, 10, 11, 12, 13, 14),<br>
          array(15, 16, 17, 18, 19, 20, 21),<br>
         );<br>
 				<br>
         <br>

         $varastoCount = 0;<br>
         <br>
          for ($rivi = 1; $rivi <= count($varasto2)-1; $rivi++) {<br>
          echo "tr>";<br>
          echo  "td>", $varasto2[0][$varastoCount], "/td>";<br>
          $varastoCount++;<br>
          for ($sarake = 0; $sarake <= 6; $sarake++){<br>
          echo "td>". $varasto2[$rivi][$sarake] ."/td>";<br>
          };<br>
          $lukuYht = $varasto2[$rivi][0] + $varasto2[$rivi][1] + $varasto2[$rivi][2] + $varasto2[$rivi][3] + $varasto2[$rivi][4] + $varasto2[$rivi][5] + $varasto2[$rivi][6];<br>
          echo td>", $lukuYht, "/td>";<br>
          $lukuArvo = $lukuYht / 7;<br>
          echo "td>", $lukuArvo, "/td>";<br>
          echo "/tr>";<br>
          };<br>
          echo "/tr>/tbody>/table>";<br>
          <br>

          echo "br>br>"<br>

          <br>
</p>
</div>
<div class="vari1"></div>
<?php

echo "<table> <tbody><tr>
                   <th> Oppilas </th>
                   <th> 10 </th>
                   <th> 20 </th>
                   <th> 30 </th>
                   <th> 40 </th>
                   <th> 50 </th>
                   <th> 70 </th>
                   <th> yht </th>
                   <th> arvosana</th>
                   </tr>";

         $varasto2 = array(
          array("Matti", "Pekka", "Juhani"),
          array(1, 2, 3, 4, 5, 6, 7),
          array(8, 9, 10, 11, 12, 13, 14),
          array(15, 16, 17, 18, 19, 20, 21),
         );
 				


         $varastoCount = 0;

          for ($rivi = 1; $rivi <= count($varasto2)-1; $rivi++) {
          echo "<tr>";
          echo  "<td>", $varasto2[0][$varastoCount], "</td>";
          $varastoCount++;
          for ($sarake = 0; $sarake <= 6; $sarake++){
          echo "<td>". $varasto2[$rivi][$sarake] ."</td>";
          };
          $lukuYht = $varasto2[$rivi][0] + $varasto2[$rivi][1] + $varasto2[$rivi][2] + $varasto2[$rivi][3] + $varasto2[$rivi][4] + $varasto2[$rivi][5] + $varasto2[$rivi][6];
          echo "<td>", $lukuYht, "</td>";
          $lukuArvo = $lukuYht / 7;
          echo "<td>", $lukuArvo, "</td>";
          echo "</tr>";
          };
          echo "</tr></tbody></table>";


          echo "<br><br>"


?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 13 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$syotettyLuku = 13;<br>
    $pii = 3.14;<br>
    $kehanPituus = $pii * 2 * $syotettyLuku;<br>
    $pintaAla = $pii * $syotettyLuku;<br>
    $pintaAla *= $pintaAla;<br>
    <br>
    echo "br>", $kehanPituus,"br>";<br>
    echo "br>", $pintaAla,"br>";<br>
    <br>

</p>
</div>
<div class="vari1"></div>
<?php

$syotettyLuku = 13;
$pii = 3.14;
$kehanPituus = $pii * 2 * $syotettyLuku;
$pintaAla = $pii * $syotettyLuku;
$pintaAla *= $pintaAla;

echo "<br>", $kehanPituus,"<br>";
echo "<br>", $pintaAla,"<br>";


?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 14 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$luku = 10;<br>
$luku--;<br>
echo "br>", $luku, "br>" ;<br>
$luku++;<br>
echo $luku, "br>";<br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$luku = 10;
$luku--;
echo "<br>", $luku, "<br>" ;
$luku++;
echo $luku, "<br>";

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 15 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$luku1 = 100; <br>
  $luku2 = 50;<br>
  <br>
  if ($luku1 >= 50 && $luku1 < 100) {<br>
    echo " br> Luku 1 on 50 tai pienempi kuin 100 br> ";<br>
  };<br>
  <br>

 if ( $luku2 > 100){<br>
 echo " br> Luku2 on suurempi kuin 100 br> ";<br>
 }<br>
 <br>

</p>
</div>
<div class="vari1"></div>
<?php

$luku1 = 100; 
  $luku2 = 50;

  if ($luku1 >= 50 && $luku1 < 100) {
    echo " <br> Luku 1 on 50 tai pienempi kuin 100 <br> ";
  };


 if ( $luku2 > 100){
 echo " <br> Luku2 on suurempi kuin 100 <br> ";
 }


?> 
</div>



<div class="col-6 col-s-6">
<h3> Tehtävä 15 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$otsikko1 = "1. luku";<br>
$teksti1 = "Jukolan talo sijaitsee eteläisessä Hämeessä.  Karhunmetsästyksessä kuollut isäntä on jättänyt talon viljelykset  hunningolle, emäntä on jäänyt huolehtimaan talosta seitsemän poikansa kanssa. Veljeksistä vanhin on Juhani, seuraavaksi tulevat kaksoset Tuomas ja Aapo, Simeoni sekä kaksoset Timo ja Lauri. Veljessarjan nuorin on nimeltään Eero. Nuorena pojat olivat välillä aika vallattomia. Kerran, Eeron vielä ollessa äitinsä helmoissa kotona, kuusi vanhinta veljestä varasti naapurista kananmunia ja karkasi sitten metsään. Karkulaisten elämä metsässä kesti muutaman päivän ennen kuin äiti apujoukkoineen löysi heidät.  Seurasi kova löylytys.<br>
Äidin kuoltua huoleton meno talossa jatkui, kunnes Aapo puhui veljilleen järkeä: talon työt on saatava käyntiin ja lukemaankin pitäisi jokaisen oppia tullakseen yhteiskunnan täysivaltaiseksi jäseneksi.  Aapo saa kannatusta, sitä paitsi Juhani on sitä mieltä, että talo tarvitsee myös emännän. Hän tunnustaa jo pitkään katselleensa Männistön Venlaa sillä silmällä. Lauria lukuun ottamatta kaikki veljekset tekevät saman tunnustuksen. Tappelun ollessa jo puhkeamassa Aapo ehdottaa, että he antavat Venlan päättää, kenet hän haluaa miehekseen. Tähän tyytyvät kaikki, sen lisäksi päättävät he lopultakin opetella lukemaan." ;<br>
<br>
$otsikko2 = "2. luku";<br>
$teksti2 = "Veljekset lähtevät porukalla kosimaan Venlaa. Lauri jää vahtimaan veljiensä tavaroita sillä aikaa kun muut menevät sisälle Männistön mökkiin. Eero aukaisee muille oven, mutta jää itse ulkopuolelle. Kosinta ei onnistu, Venlan äiti lähettää pojat kiivaasti ulos. Pohtiessaan epäonnensa syytä veljet kohtaavat naapurikylän Toukolan poikia, jotka Kissalan Aapelin klarinetin säestyksellä laulavat pilkkalaulun Jukolan pojista. Seitsemän miehen voima suututtaa veljekset niin, että syntyy tuima taistelu, jonka toukolalaiset häviävät. Nöyryyttääpä Juhani vielä yhtä toukolalaista pannen tämän hakemaan abc-kirjansa ojasta, minne se on tappelun tuoksinassa lentänyt, ja antamaan sille suukon.<br>
Veljekset päätyvät Sonnimäen harjulle miettimään tappelua ja omaa elämäänsä. Lähtö lukkarin luo lukemaan opettelemaan on vääjäämättä edessä. Timo laulaa Juhanin pyynnöstä oravasta.";<br>
<br>
$kokoteksti = "$otsikko1 <.br> $teksti1 <.br><.br> $otsikko2 <.br> $teksti2 <.br><.br>";<br>
<br>
echo "<.be>", $kokoteksti;<br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$otsikko1 = "1. luku";
$teksti1 = "Jukolan talo sijaitsee eteläisessä Hämeessä.  Karhunmetsästyksessä kuollut isäntä on jättänyt talon viljelykset  hunningolle, emäntä on jäänyt huolehtimaan talosta seitsemän poikansa kanssa. Veljeksistä vanhin on Juhani, seuraavaksi tulevat kaksoset Tuomas ja Aapo, Simeoni sekä kaksoset Timo ja Lauri. Veljessarjan nuorin on nimeltään Eero. Nuorena pojat olivat välillä aika vallattomia. Kerran, Eeron vielä ollessa äitinsä helmoissa kotona, kuusi vanhinta veljestä varasti naapurista kananmunia ja karkasi sitten metsään. Karkulaisten elämä metsässä kesti muutaman päivän ennen kuin äiti apujoukkoineen löysi heidät.  Seurasi kova löylytys.
Äidin kuoltua huoleton meno talossa jatkui, kunnes Aapo puhui veljilleen järkeä: talon työt on saatava käyntiin ja lukemaankin pitäisi jokaisen oppia tullakseen yhteiskunnan täysivaltaiseksi jäseneksi.  Aapo saa kannatusta, sitä paitsi Juhani on sitä mieltä, että talo tarvitsee myös emännän. Hän tunnustaa jo pitkään katselleensa Männistön Venlaa sillä silmällä. Lauria lukuun ottamatta kaikki veljekset tekevät saman tunnustuksen. Tappelun ollessa jo puhkeamassa Aapo ehdottaa, että he antavat Venlan päättää, kenet hän haluaa miehekseen. Tähän tyytyvät kaikki, sen lisäksi päättävät he lopultakin opetella lukemaan." ;

$otsikko2 = "2. luku";
$teksti2 = "Veljekset lähtevät porukalla kosimaan Venlaa. Lauri jää vahtimaan veljiensä tavaroita sillä aikaa kun muut menevät sisälle Männistön mökkiin. Eero aukaisee muille oven, mutta jää itse ulkopuolelle. Kosinta ei onnistu, Venlan äiti lähettää pojat kiivaasti ulos. Pohtiessaan epäonnensa syytä veljet kohtaavat naapurikylän Toukolan poikia, jotka Kissalan Aapelin klarinetin säestyksellä laulavat pilkkalaulun Jukolan pojista. Seitsemän miehen voima suututtaa veljekset niin, että syntyy tuima taistelu, jonka toukolalaiset häviävät. Nöyryyttääpä Juhani vielä yhtä toukolalaista pannen tämän hakemaan abc-kirjansa ojasta, minne se on tappelun tuoksinassa lentänyt, ja antamaan sille suukon.
Veljekset päätyvät Sonnimäen harjulle miettimään tappelua ja omaa elämäänsä. Lähtö lukkarin luo lukemaan opettelemaan on vääjäämättä edessä. Timo laulaa Juhanin pyynnöstä oravasta.";

$kokoteksti = "$otsikko1 <br> $teksti1 <br><br> $otsikko2 <br> $teksti2 <br><br>";

echo "<be>", $kokoteksti;

?> 
</div>



<div class="col-6 col-s-6">
<h3> Tehtävä 16-17 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$pisteet = 213;<br>
<br>
if($pisteet > 0 && $pisteet <= 118) {<br>
echo "arvosana = 0";<br>
}elseif ( $pisteet > 118 && $pisteet <= 212) {<br>
  echo "arvosana = 1";<br>
}elseif($pisteet > 212&& $pisteet <= 305) {<br>
  echo "arvosana = 2";<br>
}elseif($pisteet > 305&& $pisteet <= 400) {<br>
  echo "arvosana = 3";<br>
};<br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$pisteet = 213;

if($pisteet > 0 && $pisteet <= 118) {
echo "arvosana = 0";
}elseif ( $pisteet > 118 && $pisteet <= 212) {
  echo "arvosana = 1";
}elseif($pisteet > 212&& $pisteet <= 305) {
  echo "arvosana = 2";
}elseif($pisteet > 305&& $pisteet <= 400) {
  echo "arvosana = 3";
};


?> 
</div>



<div class="col-6 col-s-6">
<h3> Tehtävä 18 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$LUKU_1 = 12;<br>
$LUKU_2 = 14;<br>
$LUKU_3 = 16;<br>
<br>
if($LUKU_2 >= 14){<br>
$vali1 = $LUKU_1 + $LUKU_2;<br>
echo "<.br> $LUKU_1 + $LUKU_2   = $vali1 <.br>";<br>
$vali2 = $LUKU_2 + $LUKU_3;<br>
echo "<.br>$LUKU_2 + $LUKU_3 = $vali2<.br>";<br>
$vali3 = $LUKU_1 + $LUKU_3;<br>
echo "<.br>$LUKU_1 + $LUKU_3 = $vali3<.br>";  <br>
}; <br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$LUKU_1 = 12;
$LUKU_2 = 14;
$LUKU_3 = 16;

if($LUKU_2 >= 14){
$vali1 = $LUKU_1 + $LUKU_2;
echo "<br> $LUKU_1 + $LUKU_2   = $vali1 <br>";
$vali2 = $LUKU_2 + $LUKU_3;
echo "<br>$LUKU_2 + $LUKU_3 = $vali2<br>";
$vali3 = $LUKU_1 + $LUKU_3;
echo "<br>$LUKU_1 + $LUKU_3 = $vali3<br>";  
};
?> 
</div>



<div class="col-6 col-s-6">
<h3> Tehtävä 20 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$tulos = 123;<br>
      echo "<.br>";<br>
      switch ($tulos) {<br>
        case 123:<br>
          echo "Tulos on 123";<br>
        break;<br>
        case 234:<br>
          echo "Tulos on 234";<br>
        break;<br>
        case 456:<br>
          echo "Tulos on 345";<br>
        break;<br>
        <br>
      }<br>
      <br>
</p>
</div>
<div class="vari1"></div>
<?php

$tulos = 123;
echo "<br>";
switch ($tulos) {
  case 123:
    echo "Tulos on 123";
  break;
  case 234:
    echo "Tulos on 234";
  break;
  case 456:
    echo "Tulos on 345";
  break;

}

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 20? </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
for($i = 0; $i < 10; $i++ ) {<br>
echo "<.br> $i";<br>
};<br>
echo "<.br>";<br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php

for($i = 0; $i < 10; $i++ ) {
  echo "<br> $i";
  };
  echo "<br>";
  

?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 21 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
for($i = 0; $i <= 500; $i = $i + 50 ) {<br>
  echo "<.br> $i";<br>
  };<br>
  echo "<.br>";<br>
  <br>

</p>
</div>
<div class="vari1"></div>
<?php

for($i = 0; $i <= 500; $i = $i + 50 ) {
  echo "<br> $i";
  };
  echo "<br>";


?> 
</div>


<div class="col-6 col-s-6">
<h3> Tehtävä 23 </h3>
<p>Jotain</p>
<div class="koodi">
<p>

<br>
$taulu = array(<br>
  array("A","B","C","D","E"),<br>
  array("F","G","H","I","J"),<br>
  array("K","L","M","N","O"),<br>
  array("P","Q","R","S","T"),<br>
  array("U","V","W","Y","Y")<br>
 );<br>
 <br>
  for ($rivi = 0; $rivi <= 4; $rivi++){<br>
    for ($sarake = 0; $sarake <= 4; $sarake++){<br>
    echo $taulu[$rivi][$sarake], " ";<br>
    };<br>
    echo "<br>";
};<br>
<br>

</p>
</div>
<div class="vari1"></div>
<?php

$taulu = array(
  array("A","B","C","D","E"),
  array("F","G","H","I","J"),
  array("K","L","M","N","O"),
  array("P","Q","R","S","T"),
  array("U","V","W","Y","Y")
 );

  for ($rivi = 0; $rivi <= 4; $rivi++){
    for ($sarake = 0; $sarake <= 4; $sarake++){
    echo $taulu[$rivi][$sarake], " ";
    };
    echo "<br>";
};



?> 
</div>



<div class="col-6 col-s-6">
<h3> Tehtävä 26 </h3>
<p>Jotain</p>
<div class="koodi">
<p>
<br>
$numero = 10;<br>
<br>
while($numero >= 1) {<br>
  echo "Numero on: $numero <.br>";<br>
  $numero--;<br>
};<br>
<br>
</p>
</div>
<div class="vari1"></div>
<?php

$numero = 10;

while($numero >= 1) {
  echo "Numero on: $numero <br>";
  $numero--;
};

?> 
</div>






</body>
</html>


